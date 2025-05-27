<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Rol_permiso').feedbacks"
        :vobject="$v"
        nested="rol_permiso"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Rol</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Rol"
              name="id_rol"
              ref="select_rol"
              :successFeed="false"
              idKey="id_rol"
              textKey="nombre_rol"
              :defaultValue="rol_permiso.id_rol"
              v-model="rol_permiso.id_rol"
              :url="mb.statics('Rol').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreaterol">
            </a-button>
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
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Permisos</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Permisos"
              name="id_permiso"
              ref="select_permiso"
              :successFeed="false"
              idKey="id_permiso"
              textKey="nombre_permiso"
              :defaultValue="rol_permiso.id_permiso"
              v-model="rol_permiso.id_permiso"
              :url="mb.statics('Permisos').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatepermiso">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatepermiso = false"
          v-if="showModalCreatepermiso"
          class="modal-form"
          :title="'Añadir Permisos'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <permisos_form :model="null" :modal="true" @close_modal="permisoAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!rol_permiso.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!rol_permiso.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import permisos_form from '@/modules/security/pages/permisos/form/permisos_form';
  import rol_form from '@/modules/security/pages/rol/form/rol_form';

export default {
  name: "rol_permiso_form",
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
  validations: mb.statics('Rol_permiso').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      rol_permiso: mb.instance( 'Rol_permiso'),
      showModalCreatepermiso: false,
      permisos_list: [],
      showModalCreaterol: false,
      rol_list: [],
    };
  },
  computed: {
    rol_permisoFeedbacks() {
      return mb.statics('Rol_permiso').feedbacks;
    },
    button_text() {
      return this.rol_permiso.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.rol_permiso = mb.instance( 'Rol_permiso',this.model);
  },
  components: {
    permisos_form,
    rol_form,
  },
  methods: {
      openModalCreatepermiso() {
        this.showModalCreatepermiso = true;
      },
      permisoAdded(refresh) {
        this.showModalCreatepermiso = false;
        refresh?this.refreshpermiso():'';
      },
      async refreshpermiso() {
        this.loading = true;
        await this.$refs.select_permiso.load();
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
        this.modal?this.close_modal(null,false):this.$router.push({name: 'rol_permiso_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.rol_permiso.get_id() ? "actualizado" : "añadido";
        this.rol_permiso
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'rol_permiso_list'}):this.rol_permiso=mb.instance('Rol_permiso');
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
@import "rol_permiso_form.css";
</style>

