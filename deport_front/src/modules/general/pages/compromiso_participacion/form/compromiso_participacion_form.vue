<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Compromiso_participacion').feedbacks"
        :vobject="$v"
        nested="compromiso_participacion"
        ref="form"
        class="form-row"
      >
        <!-- Campo: Delegacion Evento -->
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Delegación Evento</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione la Delegación Evento"
              name="id_delegacion_evento"
              ref="select_delegacion_evento"
              :successFeed="false"
              idKey="id_delegacion_evento"
              textKey="nombre_delegacion_evento"
              :defaultValue="compromiso_participacion.id_delegacion_evento"
              v-model="compromiso_participacion.id_delegacion_evento"
              :url="mb.statics('Delegacion_evento').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatedelegacion_evento">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatedelegacion_evento = false"
          v-if="showModalCreatedelegacion_evento"
          class="modal-form"
          :title="'Añadir Delegación Evento'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <delegacion_evento_form :model="null" :modal="true" @close_modal="delegacion_eventoAdded"/>
        </a-modal>

        <!-- Campo: Deporte -->
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
              :defaultValue="compromiso_participacion.id_deporte"
              v-model="compromiso_participacion.id_deporte"
              :url="mb.statics('Deporte').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatedeporte">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
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
        </a-modal>

      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!compromiso_participacion.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!compromiso_participacion.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
import delegacion_evento_form from '@/modules/general/pages/delegacion_evento/form/delegacion_evento_form';
import deporte_form from '@/modules/general/pages/deporte/form/deporte_form';

export default {
  name: "compromiso_participacion_form",
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
  validations: mb.statics('Compromiso_participacion').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      compromiso_participacion: mb.instance( 'Compromiso_participacion'),
      showModalCreatedelegacion_evento: false,
      delegacion_evento_list: [],
      showModalCreatedeporte: false,
      deporte_list: [],
    };
  },
  computed: {
    compromiso_participacionFeedbacks() {
      return mb.statics('Compromiso_participacion').feedbacks;
    },
    button_text() {
      return this.compromiso_participacion.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.compromiso_participacion = mb.instance( 'Compromiso_participacion',this.model);
  },
  components: {
    delegacion_evento_form,
    deporte_form,
  },
  methods: {
      openModalCreatedelegacion_evento() {
        this.showModalCreatedelegacion_evento = true;
      },
      delegacion_eventoAdded(refresh) {
        this.showModalCreatedelegacion_evento = false;
        refresh ? this.refreshdelegacion_evento() : '';
      },
      async refreshdelegacion_evento() {
        this.loading = true;
        await this.$refs.select_delegacion_evento.load();
        this.loading = false;
      },
      openModalCreatedeporte() {
        this.showModalCreatedeporte = true;
      },
      deporteAdded(refresh) {
        this.showModalCreatedeporte = false;
        refresh ? this.refreshdeporte() : '';
      },
      async refreshdeporte() {
        this.loading = true;
        await this.$refs.select_deporte.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'compromiso_participacion_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.compromiso_participacion.get_id() ? "actualizado" : "añadido";
        this.compromiso_participacion
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {
                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'compromiso_participacion_list'}):this.compromiso_participacion=mb.instance('Compromiso_participacion');
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
@import "compromiso_participacion_form.css";
</style>
