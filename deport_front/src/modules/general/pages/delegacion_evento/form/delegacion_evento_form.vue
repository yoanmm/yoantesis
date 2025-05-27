<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Delegacion_evento').feedbacks"
        :vobject="$v"
        nested="delegacion_evento"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Evento_deportivo</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Evento_deportivo"
              name="id_evento"
              ref="select_evento"
              :successFeed="false"
              idKey="id_evento"
              textKey="nombre_evento"
              :defaultValue="delegacion_evento.id_evento"
              v-model="delegacion_evento.id_evento"
              :url="mb.statics('Evento_deportivo').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateevento">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
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
        </a-modal>
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
              :defaultValue="delegacion_evento.id_delegacion"
              v-model="delegacion_evento.id_delegacion"
              :url="mb.statics('Delegacion').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatedelegacion">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatedelegacion = false"
          v-if="showModalCreatedelegacion"
          class="modal-form"
          :title="'Añadir Delegacion'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <delegacion_form :model="null" :modal="true" @close_modal="delegacionAdded"/>
        </a-modal>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Participa</label>
          <div>
            <a-switch  v-model="delegacion_evento.participa"/>
          </div>
        </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!delegacion_evento.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!delegacion_evento.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import evento_deportivo_form from '@/modules/general/pages/evento_deportivo/form/evento_deportivo_form';
  import delegacion_form from '@/modules/general/pages/delegacion/form/delegacion_form';

export default {
  name: "delegacion_evento_form",
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
  validations: mb.statics('Delegacion_evento').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      delegacion_evento: mb.instance( 'Delegacion_evento'),
      showModalCreateevento: false,
      evento_deportivo_list: [],
      showModalCreatedelegacion: false,
      delegacion_list: [],
    };
  },
  computed: {
    delegacion_eventoFeedbacks() {
      return mb.statics('Delegacion_evento').feedbacks;
    },
    button_text() {
      return this.delegacion_evento.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.delegacion_evento = mb.instance( 'Delegacion_evento',this.model);
  },
  components: {
    evento_deportivo_form,
    delegacion_form,
  },
  methods: {
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
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'delegacion_evento_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.delegacion_evento.get_id() ? "actualizado" : "añadido";
        this.delegacion_evento
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'delegacion_evento_list'}):this.delegacion_evento=mb.instance('Delegacion_evento');
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
@import "delegacion_evento_form.css";
</style>

