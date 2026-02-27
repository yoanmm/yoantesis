<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Competencia').feedbacks"
        :vobject="$v"
        nested="competencia"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Evento deportivo</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Evento deportivo"
              name="id_evento"
              ref="select_evento"
              :successFeed="false"
              idKey="id_evento"
              textKey="nombre_evento"
              :defaultValue="competencia.id_evento"
              v-model="competencia.id_evento"
              :url="mb.statics('Evento_deportivo').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateevento">
            </a-button>
          </div>
        </tc-form-item>

        <!--<a-modal
          @cancel="showModalCreateevento = false"
          v-if="showModalCreateevento"
          class="modal-form"
          :title="'Añadir Evento_deportivo'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <evento_deportivo_form :model="null" :modal="true" @close_modal="eventoAdded"/>
        </a-modal>-->

        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Deporte</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Deporte"
              name="id_deporte"
              ref="select_deporte"
              :successFeed="false"
              idKey="id_deporte"
              textKey="nombre_deporte"
              :defaultValue="competencia.id_deporte"
              v-model="competencia.id_deporte"
              :url="mb.statics('Deporte').select_2_url"
            />
            <!--<a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatedeporte">
            </a-button>-->
            
          </div>
        </tc-form-item>

        <!--<a-modal
          @cancel="showModalCreatedeporte = false"
          v-if="showModalCreatedeporte"
          class="modal-form"
          :title="'Añadir Deporte'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <deporte_form :model="null" :modal="true" @close_modal="deporteAdded"/>
        </a-modal>-->

          <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Terminado</label>
          <div>
            <a-switch  v-model="competencia.terminado"/>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Fin de inscripcion</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="fin_inscripcion" v-model="competencia.fin_inscripcion"></tc-date-picker>
          </div>
        </tc-form-item>

      <tc-form-item class="form-group px-3 col-12">
        <label>Resultado competencia</label>
        <tc-input :text_area="true" size="medium" name="resultado_competencia" v-model="competencia.resultado_competencia"/>
      </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!competencia.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!competencia.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Cancelar acción">
          <a-button :disabled="loading"  type="danger" @click="cancel()">Cancel</a-button>
        </a-tooltip>
      </a-button-group>
    </div>
  </div>
</template>

<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load"
  import deporte_form from '@/modules/general/pages/deporte/form/deporte_form';
  import persona_arbitro_form from '@/modules/general/pages/persona_arbitro/form/persona_arbitro_form';
  import evento_deportivo_form from '@/modules/general/pages/evento_deportivo/form/evento_deportivo_form';

export default {
  name: "competencia_form",
  inject: {
      close_modal: { default: ()=>{} },
      load_data: {default: () => {} }
  },
  props: {
    model: {
      type: Object,
      default: () => {}
    },
      modal: {
        type: Boolean,
        default: false
      },
    popoverPlacement: {
      type: String,
      default: "bottomLeft"
    }
  },
  validations: mb.statics('Competencia').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      competencia: mb.instance( 'Competencia'),
      showModalCreatedeporte: false,
      deporte_list: [],
      showModalCreatesupervisor: false,
      persona_arbitro_list: [],
      showModalCreateevento: false,
      evento_deportivo_list: [],
    };
  },
  computed: {
    competenciaFeedbacks() {
      return mb.statics('Competencia').feedbacks;
    },
    button_text() {
      return this.competencia.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.competencia = mb.instance( 'Competencia',this.model);
  },
  components: {
    deporte_form,
    persona_arbitro_form,
    evento_deportivo_form,
  },
  methods: {
      openModalCreatedeporte() {
        this.showModalCreatedeporte = true;
      },
      deporteAdded(refresh) {
        this.showModalCreatedeporte = false;
        refresh?this.refreshdeporte():'';
      },
      async refreshdeporte() {
        this.loading = true;
        await this.$refs.select_deporte.load();
        this.loading = false;
      },
      openModalCreatesupervisor() {
        this.showModalCreatesupervisor = true;
      },
      supervisorAdded(refresh) {
        this.showModalCreatesupervisor = false;
        refresh?this.refreshsupervisor():'';
      },
      async refreshsupervisor() {
        this.loading = true;
        await this.$refs.select_supervisor.load();
        this.loading = false;
      },
      openModalCreateevento() {
        this.showModalCreateevento = true;
      },
      eventoAdded(refresh) {
        this.showModalCreateevento = false;
        refresh?this.refreshevento():'';
      },
      async refreshevento() {
        this.loading = true;
        await this.$refs.select_evento.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'competencia_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.competencia.get_id() ? "actualizado" : "añadido";
        this.competencia
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'competencia_list'}):this.competencia=mb.instance('Competencia');
               }
               this.load_data()
               this.$refs.form.vobject.$reset()

            }
            this.loading = false;
          })
          .catch((error) => {
            this.loading = false;
            utils.process_error(error);
          });
      }
    }
  }
};
</script>

<style scoped>
@import "competencia_form.css";
</style>

