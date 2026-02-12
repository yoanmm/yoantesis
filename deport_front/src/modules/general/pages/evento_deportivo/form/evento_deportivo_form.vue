<template>
  <div>
    <a-steps :current="current">
      <a-step v-for="(item, index) in steps" :key="index" :title="item.title" />
    </a-steps>

    <div class="steps-content">
      <component
          v-for="(s, idx) in steps"
          :is="s.component"
          :key="idx"
          v-show="current === idx"
          :ref="'step' + idx"
          :model="evento"
      />
    </div>

    <div class="steps-action">
      <a-button v-if="current < steps.length - 1" type="primary" @click="next">
        Siguiente
      </a-button>
      <a-button v-if="current === steps.length - 1" type="primary" :loading="loading" @click="save_model">
        Finalizar
      </a-button>
      <a-button v-if="current > 0" style="margin-left: 8px" @click="prev">
        Anterior
      </a-button>
    </div>
  </div>
</template>

<script>
import StepOne from "./step_one.vue";
import StepTwo from "./step_two.vue";
import StepThree from "./step_three.vue";
import * as mb from "@/helpers/loaders/model.load";
import * as utils from "@/helpers/helpers/utils";
import axios_instance from "@/config/axios/axios";

export default {
  components: { StepOne, StepTwo, StepThree },
  props: {
    model: { type: Object, default: () => ({}) },
    modal: { type: Boolean, default: false }
  },
  data() {
    return {
      current: 0,
      loading: false,
      evento: mb.instance("Evento_deportivo"),
      steps: [
        { title: "Evento", component: "StepOne" },
        { title: "Deportes", component: "StepTwo" },
        { title: "Participantes", component: "StepThree" },
      ],
    };
  },
  mounted() {
    if (this.model && Object.keys(this.model).length) {
      this.evento = mb.instance("Evento_deportivo", this.model);
    }
  },
  methods: {
    getStepComponent(index) {
      const ref = this.$refs['step' + index];
      return Array.isArray(ref) ? ref[0] : ref;
    },

    next() {
      const comp = this.getStepComponent(this.current);
      if (comp && comp.$refs && comp.$refs.form && !comp.$refs.form.validate()) {
        return;
      }
      this.current++;
    },

    prev() {
      if (this.current > 0) this.current--;
    },

    async save_model() {
      try {
        this.loading = true;

        // 1. Recoger datos
        const stepOneComp = this.getStepComponent(0);
        const stepTwoComp = this.getStepComponent(1);
        const stepThreeComp = this.getStepComponent(2);

        const stepOneData = stepOneComp ? stepOneComp.getData() : {};
        const stepOneFormData = stepOneComp ? stepOneComp.getFormData() : null;

        const idsDeportes = stepTwoComp ? stepTwoComp.getData() : [];
        const idsDelegaciones = stepThreeComp ? stepThreeComp.getData() : [];

        // 2. Guardar Evento Principal
        let id_evento = this.evento.get_id() || stepOneData.id_evento;
        const esEdicion = !!id_evento;
        const method = esEdicion ? 'put' : 'post';
        let url = this.evento.url;

        let response = null;

        if (stepOneFormData) {
          response = await axios_instance({
            url: url,
            method: method,
            data: stepOneFormData,
            headers: { 'Content-Type': 'multipart/form-data' }
          });
        } else {
          this.evento = mb.instance("Evento_deportivo", stepOneData);
          response = await this.evento.save();
        }

        if (!utils.process_response(response, esEdicion ? "actualizado" : "creado")) {
          this.loading = false;
          return;
        }

        // =================================================================
        // --- CAPTURA DEL ID CORREGIDA ---
        // =================================================================

        if (!esEdicion) {
          const d = response.data; // El cuerpo de la respuesta { success: true, model: {...} }

          console.log("Respuesta servidor:", d);

          // CASO 1: Tu estructura actual (dentro de 'model')
          if (d && d.model && d.model.id_evento) {
            id_evento = d.model.id_evento;
          }
          // CASO 2: Estructura estándar (dentro de 'data')
          else if (d && d.data && d.data.id_evento) {
            id_evento = d.data.id_evento;
          }
          // CASO 3: Directo en la raíz
          else if (d && d.id_evento) {
            id_evento = d.id_evento;
          }
          // CASO 4: Si el modelo local se actualizó solo
          else if (this.evento && this.evento.id_evento) {
            id_evento = this.evento.id_evento;
          }
        }

        if (!id_evento) {
          this.$notification.error({
            message: 'Error de Datos',
            description: 'El evento se creó pero no se pudo recuperar el ID. No se guardaron las relaciones.'
          });
          this.loading = false;
          return;
        }

        // =================================================================
        // --- GUARDAR RELACIONES ---
        // =================================================================

        // Delegaciones
        if (idsDelegaciones.length > 0) {
          const promesasDelegacion = idsDelegaciones.map(id_delegacion => {
            return mb.instance("Delegacion_evento", {
              id_evento: id_evento,
              id_delegacion: id_delegacion,
            }).save();
          });
          await Promise.all(promesasDelegacion);
        }

        // Deportes
        if (idsDeportes.length > 0) {
          // 1. Cargar todos los deportes registrados en la BD
          const respuestaDeportes = await mb.statics("Deporte").list();
          const listaDeportesBD = respuestaDeportes.data || []; // Ajustar según la estructura de tu respuesta


          // 2. Procesar la actualización masiva
          const promesasDeporte = listaDeportesBD.map(deporteBD => {

            // Verificamos si este deporte específico debe estar activo o no
            const debeEstarActivo = idsDeportes.includes(deporteBD.id_deporte) ? 1 : 0;

            // Solo disparamos el save si el estado actual en la BD es distinto al que queremos poner
            // Esto evita peticiones innecesarias si el deporte ya estaba en 0 o ya estaba en 1
            if (deporteBD.activo !== debeEstarActivo) {

              let deporte = mb.instance("Deporte", deporteBD);
              deporte.activo = debeEstarActivo;
              console.log(deporteBD);
              return deporte.save();
            }

            return Promise.resolve(); // No hay cambios para este registro
          });

          await Promise.all(promesasDeporte);
        }

        this.$message.success("Evento guardado correctamente.");
        this.$emit('success');
        this.$emit('close');

        // Limpieza
        this.current = 0;
        this.evento = mb.instance("Evento_deportivo");
        if (stepTwoComp && stepTwoComp.resetTable) stepTwoComp.resetTable();
        if (stepThreeComp && stepThreeComp.resetTable) stepThreeComp.resetTable();
        if (stepOneComp && stepOneComp.reset) stepOneComp.reset();

      } catch (error) {
        console.error("Error:", error);
        utils.process_error(error);
      } finally {
        this.loading = false;
      }
    },

    resetForm() {
      this.current = 0;
      this.evento = mb.instance("Evento_deportivo");
      const s1 = this.getStepComponent(0);
      const s2 = this.getStepComponent(1);
      const s3 = this.getStepComponent(2);
      if (s1 && s1.reset) s1.reset();
      if (s2 && s2.resetTable) s2.resetTable();
      if (s3 && s3.resetTable) s3.resetTable();
    }
  },
};
</script>

<style scoped>
@import "evento_deportivo_form.css";
.steps-content {
  margin-top: 16px;
  border: 1px dashed #e9e9e9;
  border-radius: 6px;
  background-color: #fafafa;
  min-height: 200px;
  text-align: center;
  padding: 20px;
}
.steps-action { margin-top: 24px; }
</style>