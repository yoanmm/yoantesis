<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Log').feedbacks"
        :vobject="$v"
        nested="log"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Id<span class='required_field'>*</span></label>
        <tc-input placeholder='Ingrese el valor'   type_car='num'  name='id' v-model="log.id"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre_accion</label>
        <tc-input placeholder='Ingrese el valor' name='nombre_accion' v-model="log.nombre_accion"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Tabla</label>
        <tc-input placeholder='Ingrese el valor' name='tabla' v-model="log.tabla"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Record</label>
        <tc-input placeholder='Ingrese el valor' name='record' v-model="log.record"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Ip</label>
        <tc-input placeholder='Ingrese el valor' name='ip' v-model="log.ip"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Creado</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="creado" v-model="log.creado"></tc-date-picker>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Actualizado</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="actualizado" v-model="log.actualizado"></tc-date-picker>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Usuarios</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Usuarios"
              name="id_usuario"
              ref="select_usuario"
              :successFeed="false"
              idKey="id_usuario"
              textKey="username"
              :defaultValue="log.id_usuario"
              v-model="log.id_usuario"
              :url="mb.statics('Usuarios').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateusuario">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreateusuario = false"
          v-if="showModalCreateusuario"
          class="modal-form"
          :title="'Añadir Usuarios'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <usuarios_form :model="null" :modal="true" @close_modal="usuarioAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!log.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!log.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import usuarios_form from '@/modules/security/pages/usuarios/form/usuarios_form';

export default {
  name: "log_form",
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
  validations: mb.statics('Log').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      log: mb.instance( 'Log'),
      showModalCreateusuario: false,
      usuarios_list: [],
    };
  },
  computed: {
    logFeedbacks() {
      return mb.statics('Log').feedbacks;
    },
    button_text() {
      return this.log.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.log = mb.instance( 'Log',this.model);
  },
  components: {
    usuarios_form,
  },
  methods: {
      openModalCreateusuario() {
        this.showModalCreateusuario = true;
      },
      usuarioAdded(refresh) {
        this.showModalCreateusuario = false;
        refresh?this.refreshusuario():'';
      },
      async refreshusuario() {
        this.loading = true;
        await this.$refs.select_usuario.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'log_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.log.get_id() ? "actualizado" : "añadido";
        this.log
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'log_list'}):this.log=mb.instance('Log');
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
@import "log_form.css";
</style>

