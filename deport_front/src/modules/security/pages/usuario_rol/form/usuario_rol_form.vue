<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Usuario_rol').feedbacks"
        :vobject="$v"
        nested="usuario_rol"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Usuarios</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Usuario"
              name="id_usuario"
              ref="select_usuario"
              :successFeed="false"
              idKey="id_usuario"
              textKey="username"
              :defaultValue="usuario_rol.id_usuario"
              v-model="usuario_rol.id_usuario"
              :url="mb.statics('Usuarios').select_2_url"
            />
           <!-- <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateusuario">
            </a-button>-->
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
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Roles</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Rol"
              name="id_rol"
              ref="select_rol"
              :successFeed="false"
              idKey="id_rol"
              textKey="nombre_rol"
              :defaultValue="usuario_rol.id_rol"
              v-model="usuario_rol.id_rol"
              :url="mb.statics('Rol').select_2_url"
            />
            <!--<a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreaterol">
            </a-button>-->
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreaterol = false"
          v-if="showModalCreaterol"
          class="modal-form"
          :title="'Añadir Rol'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <rol_form :model="null" :modal="true" @close_modal="rolAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!usuario_rol.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!usuario_rol.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import rol_form from '@/modules/security/pages/rol/form/rol_form';

export default {
  name: "usuario_rol_form",
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
  validations: mb.statics('Usuario_rol').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      usuario_rol: mb.instance( 'Usuario_rol'),
      showModalCreateusuario: false,
      usuarios_list: [],
      showModalCreaterol: false,
      rol_list: [],
    };
  },
  computed: {
    usuario_rolFeedbacks() {
      return mb.statics('Usuario_rol').feedbacks;
    },
    button_text() {
      return this.usuario_rol.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.usuario_rol = mb.instance( 'Usuario_rol',this.model);
  },
  components: {
    usuarios_form,
    rol_form,
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
      openModalCreaterol() {
        this.showModalCreaterol = true;
      },
      rolAdded(refresh) {
        this.showModalCreaterol = false;
        refresh?this.refreshrol():'';
      },
      async refreshrol() {
        this.loading = true;
        await this.$refs.select_rol.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'usuario_rol_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.usuario_rol.get_id() ? "actualizado" : "añadido";
        this.usuario_rol
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'usuario_rol_list'}):this.usuario_rol=mb.instance('Usuario_rol');
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
@import "usuario_rol_form.css";
</style>

