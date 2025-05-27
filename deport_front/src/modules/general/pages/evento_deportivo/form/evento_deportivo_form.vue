<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Evento_deportivo').feedbacks"
        :vobject="$v"
        nested="evento_deportivo"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre_evento</label>
        <tc-input placeholder='Ingrese el valor' name='nombre_evento' v-model="evento_deportivo.nombre_evento"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Descripcion_evento</label>
        <tc-input placeholder='Ingrese el valor' name='descripcion_evento' v-model="evento_deportivo.descripcion_evento"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Logo</label>
        <tc-input placeholder='Ingrese el valor' name='logo' v-model="evento_deportivo.logo"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Fecha_inicio</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="fecha_inicio" v-model="evento_deportivo.fecha_inicio"></tc-date-picker>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Fecha_fin</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="fecha_fin" v-model="evento_deportivo.fecha_fin"></tc-date-picker>
          </div>
        </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Curso</label>
        <tc-input placeholder='Ingrese el valor' name='curso' v-model="evento_deportivo.curso"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Edicion_evento</label>
        <tc-input placeholder='Ingrese el valor' name='edicion_evento' v-model="evento_deportivo.edicion_evento"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Terminado</label>
          <div>
            <a-switch  v-model="evento_deportivo.terminado"/>
          </div>
        </tc-form-item>
      <tc-form-item class="form-group px-3 col-12">
        <label>Resultado_edicion</label>
        <tc-input :text_area="true" size="large" name="resultado_edicion" v-model="evento_deportivo.resultado_edicion"/>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Descripcion_delegaciones</label>
        <tc-input placeholder='Ingrese el valor' name='descripcion_delegaciones' v-model="evento_deportivo.descripcion_delegaciones"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Evento_deportivo_regla</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Evento_deportivo_regla"
              name="id_regla_evento"
              ref="select_regla_evento"
              :successFeed="false"
              idKey="id_regla_evento"
              textKey="nombre_regla"
              :defaultValue="evento_deportivo.id_regla_evento"
              v-model="evento_deportivo.id_regla_evento"
              :url="mb.statics('Evento_deportivo_regla').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateregla_evento">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreateregla_evento = false"
          v-if="showModalCreateregla_evento"
          class="modal-form"
          :title="'Añadir Evento_deportivo_regla'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <evento_deportivo_regla_form :model="null" :modal="true" @close_modal="regla_eventoAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!evento_deportivo.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!evento_deportivo.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import evento_deportivo_regla_form from '@/modules/general/pages/evento_deportivo_regla/form/evento_deportivo_regla_form';

export default {
  name: "evento_deportivo_form",
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
  validations: mb.statics('Evento_deportivo').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      evento_deportivo: mb.instance( 'Evento_deportivo'),
      showModalCreateregla_evento: false,
      evento_deportivo_regla_list: [],
    };
  },
  computed: {
    evento_deportivoFeedbacks() {
      return mb.statics('Evento_deportivo').feedbacks;
    },
    button_text() {
      return this.evento_deportivo.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.evento_deportivo = mb.instance( 'Evento_deportivo',this.model);
  },
  components: {
    evento_deportivo_regla_form,
  },
  methods: {
      openModalCreateregla_evento() {
        this.showModalCreateregla_evento = true;
      },
      regla_eventoAdded(refresh) {
        this.showModalCreateregla_evento = false;
        refresh?this.refreshregla_evento():'';
      },
      async refreshregla_evento() {
        this.loading = true;
        await this.$refs.select_regla_evento.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'evento_deportivo_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.evento_deportivo.get_id() ? "actualizado" : "añadido";
        this.evento_deportivo
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'evento_deportivo_list'}):this.evento_deportivo=mb.instance('Evento_deportivo');
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
@import "evento_deportivo_form.css";
</style>

