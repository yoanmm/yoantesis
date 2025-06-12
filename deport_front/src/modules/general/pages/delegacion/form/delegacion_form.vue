<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Delegacion').feedbacks"
        :vobject="$v"
        nested="delegacion"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre</label>
        <tc-input placeholder='Ingrese el dato' name='nombre_delegacion' v-model="delegacion.nombre_delegacion"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Abreviatura</label>
        <tc-input placeholder='Ingrese el dato' name='abreviatura' v-model="delegacion.abreviatura"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Mascota</label>
        <tc-input placeholder='Ingrese el dato' name='mascota' v-model="delegacion.mascota"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Color</label>
        <tc-input placeholder='Ingrese el dato' name='color' v-model="delegacion.color"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Logo</label>
        <tc-input placeholder='Ingrese el dato' name='logo' v-model="delegacion.logo"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Tipo</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el tipo de delegación"
              name="id_tipo_delegacion"
              ref="select_tipo_delegacion"
              :successFeed="false"
              idKey="id_tipo_delegacion"
              textKey="tipo_delegacion"
              :defaultValue="delegacion.id_tipo_delegacion"
              v-model="delegacion.id_tipo_delegacion"
              :url="mb.statics('Delegacion_tipo').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatetipo_delegacion">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatetipo_delegacion = false"
          v-if="showModalCreatetipo_delegacion"
          class="modal-form"
          :title="'Añadir tipo de delegación'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <delegacion_tipo_form :model="null" :modal="true" @close_modal="tipo_delegacionAdded"/>
        </a-modal>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Reglas</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el documento "
              name="id_regla_delegacion"
              ref="select_regla_delegacion"
              :successFeed="false"
              idKey="id_regla_delegacion"
              textKey="nombre_regla"
              :defaultValue="delegacion.id_regla_delegacion"
              v-model="delegacion.id_regla_delegacion"
              :url="mb.statics('Delegacion_regla').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateregla_delegacion">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreateregla_delegacion = false"
          v-if="showModalCreateregla_delegacion"
          class="modal-form"
          :title="'Añadir Regla'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <delegacion_regla_form :model="null" :modal="true" @close_modal="regla_delegacionAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!delegacion.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!delegacion.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Cancelar acción">
          <a-button :disabled="loading"  type="danger" @click="cancel()">Cancelar</a-button>
        </a-tooltip>
      </a-button-group>
    </div>
  </div>
</template>

<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load"
  import delegacion_tipo_form from '@/modules/general/pages/delegacion_tipo/form/delegacion_tipo_form';
  import delegacion_regla_form from '@/modules/general/pages/delegacion_regla/form/delegacion_regla_form';

export default {
  name: "delegacion_form",
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
  validations: mb.statics('Delegacion').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      delegacion: mb.instance( 'Delegacion'),
      showModalCreatetipo_delegacion: false,
      delegacion_tipo_list: [],
      showModalCreateregla_delegacion: false,
      delegacion_regla_list: [],
    };
  },
  computed: {
    delegacionFeedbacks() {
      return mb.statics('Delegacion').feedbacks;
    },
    button_text() {
      return this.delegacion.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.delegacion = mb.instance( 'Delegacion',this.model);
  },
  components: {
    delegacion_tipo_form,
    delegacion_regla_form,
  },
  methods: {
      openModalCreatetipo_delegacion() {
        this.showModalCreatetipo_delegacion = true;
      },
      tipo_delegacionAdded(refresh) {
        this.showModalCreatetipo_delegacion = false;
        refresh?this.refreshtipo_delegacion():'';
      },
      async refreshtipo_delegacion() {
        this.loading = true;
        await this.$refs.select_tipo_delegacion.load();
        this.loading = false;
      },
      openModalCreateregla_delegacion() {
        this.showModalCreateregla_delegacion = true;
      },
      regla_delegacionAdded(refresh) {
        this.showModalCreateregla_delegacion = false;
        refresh?this.refreshregla_delegacion():'';
      },
      async refreshregla_delegacion() {
        this.loading = true;
        await this.$refs.select_regla_delegacion.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'delegacion_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.delegacion.get_id() ? "actualizado" : "añadido";
        this.delegacion
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'delegacion_list'}):this.delegacion=mb.instance('Delegacion');
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
@import "delegacion_form.css";
</style>

