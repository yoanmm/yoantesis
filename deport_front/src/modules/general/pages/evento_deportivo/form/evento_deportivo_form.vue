<template>
  <div>
    <a-steps :current="current">
      <a-step v-for="(item, index) in steps" :key="index" :title="item.title" />
    </a-steps>
    <div class="steps-content">
      <component v-for="(s, idx) in steps" :is="s.component" :key="idx" v-show="current===idx" :ref="'step'+idx" />
    </div>
    <div class="steps-action">
      <a-button v-if="current < steps.length - 1" type="primary" @click="next">
        Next
      </a-button>
      <a-button v-if="current === steps.length - 1" type="primary" :loading="loading" @click="save_model">
        Done
      </a-button>
      <a-button v-if="current > 0" style="margin-left: 8px" @click="prev">
        Previous
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
  components: {
    StepOne,
    StepTwo,
    StepThree,
  },
  props: {
    model: {
      type: Object,
      default: () => ({})
    },
    modal: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      current: 0,
      loading: false,
      evento: mb.instance("Evento_deportivo"),
      steps: [
        {
          title: "Evento",
          component: "StepOne",
        },
        {
          title: "Deportes",
          component: "StepTwo",
        },
        {
          title: "Participantes",
          component: "StepThree",
        },
      ],
    };
  },
  mounted() {
    if (this.model && Object.keys(this.model).length) {
      this.evento = mb.instance("Evento_deportivo", this.model);
    }
  },
  methods: {
    next() {
      if (this.current < this.steps.length - 1) {
        const comp = this.$refs['step' + this.current];
        if (comp && comp.$refs && comp.$refs.form && !comp.$refs.form.validate()) {
          return;
        }
        if (comp && typeof comp.setValue === 'function') {
          try { comp.setValue(); } catch (e) {}
        }
        this.current++;
      }
    },
    prev() {
      if (this.current > 0) {
        this.current--;
      }
    },
    async save_model() {
      // Validar cada paso y orquestar 3 inserciones: evento, delegaciones, deportes
      try {
        this.loading = true;

        const stepOneComp = this.$refs.step0;
        const stepOneRaw = stepOneComp?.getData?.() || {};
        const stepOneForm = stepOneComp?.getFormData?.() ?? null;
        const stepTwoData = this.$refs.step1?.getData?.() || { deportes: [] };
        const stepThreeData = this.$refs.step2?.getData?.() || [];

        // Normalizar datos del StepOne a un objeto plano
        let stepOneData = {};
        try {
          if (stepOneRaw && typeof stepOneRaw.object === "function") {
            stepOneData = stepOneRaw.object(true);
          } else if (stepOneRaw && typeof stepOneRaw === "object") {
            stepOneData = { ...stepOneRaw };
          }
        } catch (e) {
          stepOneData = { ...stepOneRaw };
        }

        // Formatear fechas si vienen como moment
        if (stepOneData.fecha_inicio && stepOneData.fecha_inicio.format) {
          stepOneData.fecha_inicio = stepOneData.fecha_inicio.format("YYYY-MM-DD");
        }
        if (stepOneData.fecha_fin && stepOneData.fecha_fin.format) {
          stepOneData.fecha_fin = stepOneData.fecha_fin.format("YYYY-MM-DD");
        }

        // Crear/actualizar Evento_deportivo: usar FormData si el step devolvió archivos
        let response = null;
        const accion = (stepOneData && stepOneData.id_evento) || this.evento.get_id() ? "actualizado" : "añadido";

        if (stepOneForm instanceof FormData) {
          try {
            response = await axios_instance({
              url: this.evento.url,
              method: accion === 'añadido' ? 'post' : 'put',
              data: stepOneForm,
              headers: { 'Content-Type': 'multipart/form-data' }
            });
          } catch (err) {
            response = err.response || err;
          }
        } else {
          // sin archivos: usar el método del modelo
          this.evento = mb.instance("Evento_deportivo", stepOneData);
          response = await this.evento.save();
        }

        if (!utils.process_response(response, accion)) {
          this.loading = false;
          return;
        }

        // Obtener id_evento: preferir el id devuelto por la API en la respuesta
        let id_evento = this.evento.get_id();
        try {
          if (response && response.data) {
            const d = response.data.data || response.data;
            id_evento = id_evento || d.id_evento || d.id || d[Object.keys(d)[0]];
          }
        } catch (e) {
          // ignore
        }

        // Guardar relaciones delegacion_evento para las delegaciones seleccionadas
        const delegacionIds = Array.isArray(stepThreeData)
          ? stepThreeData
          : stepThreeData.delegaciones || [];

        if (delegacionIds.length > 0) {
          const saves = delegacionIds.map(id => {
            const de = mb.instance("Delegacion_evento", {
              id_evento,
              id_delegacion: id,
              participa: 1,
            });
            return de.save();
          });

          const results = await Promise.all(saves);
          // process each response
          results.forEach(r => utils.process_response(r, "añadido"));
        }

        // Activar deportes seleccionados (step two): establecer activo = 1
        const deporteIds = Array.isArray(stepTwoData) ? stepTwoData : stepTwoData.deportes || [];
        if (deporteIds.length > 0) {
          const deporteSaves = deporteIds.map(id => {
            const d = mb.instance("Deporte", { id_deporte: id, activo: 1 });
            return d.save();
          });
          const deporteResults = await Promise.all(deporteSaves);
          deporteResults.forEach(r => utils.process_response(r, "actualizado"));
        }

        this.$message.success(`Evento ${accion} correctamente`);
        // Resetear wizard
        this.current = 0;
        this.evento = mb.instance("Evento_deportivo");

        // limpiar las selecciones de tablas si existen
        if (this.$refs.step1?.resetTable) this.$refs.step1.resetTable();
        if (this.$refs.step2?.resetTable) this.$refs.step2.resetTable();

      } catch (error) {
        utils.process_error(error);
      } finally {
        this.loading = false;
      }
    },
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
}

.steps-action {
  margin-top: 24px;
}
</style>
