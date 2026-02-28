<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Congresillo_asistencia').feedbacks"
        :vobject="$v"
        nested="congresillo_asistencia"
        ref="form"
        class="form-row"
      >

      <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Delegacion</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Delegacion"
              name="id_delegacion"
              ref="select_delegacion"
              :successFeed="false"
              idKey="id_delegacion"
              textKey="nombre_delegacion"
              :defaultValue="congresillo_asistencia.id_delegacion"
              v-model="congresillo_asistencia.id_delegacion"
              :url="mb.statics('Delegacion').select_2_url"
            />
          </div>
        </tc-form-item>

      <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Representante</label>
          <tc-autocomplete 
              placeholder="Seleccione el representante" 
              name="id_persona" 
              ref="select_persona"
              :successFeed="false" 
              idKey="id_persona" 
              textKey="nombre_completo" 
              :defaultValue="congresillo_asistencia.representante"
              v-model="congresillo_asistencia.representante" 
              :url="mb.statics('Persona').select_2_url" 
              :disabled="!congresillo_asistencia.id_delegacion"/>
              
        </tc-form-item>

        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Congresillo</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Congresillo_deporte"
              name="id_congresillo"
              ref="select_congresillo"
              :successFeed="false"
              idKey="id_congresillo"
              textKey="id_competencia"
              :defaultValue="congresillo_asistencia.id_congresillo"
              v-model="congresillo_asistencia.id_congresillo"
              :url="mb.statics('Congresillo_deporte').select_2_url"
            />
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatecongresillo = false"
          v-if="showModalCreatecongresillo"
          class="modal-form"
          :title="'Añadir Congresillo_deporte'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <congresillo_deporte_form :model="null" :modal="true" @close_modal="congresilloAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!congresillo_asistencia.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!congresillo_asistencia.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import delegacion_form from '@/modules/general/pages/delegacion/form/delegacion_form';
  import congresillo_deporte_form from '@/modules/general/pages/congresillo_deporte/form/congresillo_deporte_form';

export default {
  name: "congresillo_asistencia_form",
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
  validations: mb.statics('Congresillo_asistencia').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      congresillo_asistencia: mb.instance( 'Congresillo_asistencia'),
      showModalCreatedelegacion: false,
      delegacion_list: [],
      showModalCreatecongresillo: false,
      congresillo_deporte_list: [],
    };
  },
  computed: {
    congresillo_asistenciaFeedbacks() {
      return mb.statics('Congresillo_asistencia').feedbacks;
    },
    button_text() {
      return this.congresillo_asistencia.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.congresillo_asistencia = mb.instance( 'Congresillo_asistencia',this.model);
    this.loadPersonas();
  },
  components: {
    delegacion_form,
    congresillo_deporte_form,
  },
  methods: {
      openModalCreatedelegacion() {
        this.showModalCreatedelegacion = true;
      },
      delegacionAdded(refresh) {
        this.showModalCreatedelegacion = false;
        refresh?this.refreshdelegacion():'';
      },
      async refreshdelegacion() {
        this.loading = true;
        await this.$refs.select_delegacion.load();
        this.loading = false;
      },
      openModalCreatecongresillo() {
        this.showModalCreatecongresillo = true;
      },
      congresilloAdded(refresh) {
        this.showModalCreatecongresillo = false;
        refresh?this.refreshcongresillo():'';
      },
      async refreshcongresillo() {
        this.loading = true;
        await this.$refs.select_congresillo.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'congresillo_asistencia_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.congresillo_asistencia.get_id() ? "actualizado" : "añadido";
        this.congresillo_asistencia
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'congresillo_asistencia_list'}):this.congresillo_asistencia=mb.instance('Congresillo_asistencia');
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
@import "congresillo_asistencia_form.css";
</style>

