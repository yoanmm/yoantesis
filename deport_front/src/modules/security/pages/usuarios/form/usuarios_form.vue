<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Usuarios').feedbacks"
        :vobject="$v"
        nested="usuarios"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre de usuario</label>
        <tc-input placeholder='Ingrese el valor' name='username' v-model="usuarios.username"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Contraseña</label>
        <tc-input placeholder='Ingrese el valor' name='password' v-model="usuarios.password"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Correo</label>
        <tc-input placeholder='Ingrese el valor' name='correo' v-model="usuarios.correo"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Creado</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="creado" v-model="usuarios.creado" :readonly="true" :disabled="true"></tc-date-picker>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Actualizado</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="actualizado" v-model="usuarios.actualizado" :readonly="true" :disabled="true"></tc-date-picker>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Activo</label>
          <div>
            <a-switch  v-model="usuarios.activo"/>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Persona</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el usuario"
              name="id_persona"
              ref="select_persona"
              :successFeed="false"
              idKey="id_persona"
              textKey="nombre"
              :defaultValue="usuarios.id_persona"
              v-model="usuarios.id_persona"
              :url="mb.statics('Persona').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatepersona">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatepersona = false"
          v-if="showModalCreatepersona"
          class="modal-form"
          :title="'Añadir Persona'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <persona_form :model="null" :modal="true" @close_modal="personaAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!usuarios.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!usuarios.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import persona_form from '@/modules/general/pages/persona/form/persona_form';

export default {
  name: "usuarios_form",
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
  validations: mb.statics('Usuarios').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      usuarios: mb.instance( 'Usuarios'),
      showModalCreatepersona: false,
      persona_list: [],
      today: new Date().toISOString().slice(0, 10),
    };
  },
  computed: {
    usuariosFeedbacks() {
      return mb.statics('Usuarios').feedbacks;
    },
    button_text() {
      return this.usuarios.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.usuarios = mb.instance( 'Usuarios',this.model);
    // Si es creación, setear fechas actuales
    if (!this.usuarios.get_id()) {
      this.usuarios.creado = this.today;
      this.usuarios.actualizado = this.today;
    } else {
      // Si es edición y no hay fecha, setear la actual
      if (!this.usuarios.creado) this.usuarios.creado = this.today;
      if (!this.usuarios.actualizado) this.usuarios.actualizado = this.today;
    }
  },
  components: {
    persona_form,
  },
  methods: {
      openModalCreatepersona() {
        this.showModalCreatepersona = true;
      },
      personaAdded(refresh) {
        this.showModalCreatepersona = false;
        refresh?this.refreshpersona():'';
      },
      async refreshpersona() {
        this.loading = true;
        await this.$refs.select_persona.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'usuarios_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.usuarios.get_id() ? "actualizado" : "añadido";
        this.usuarios
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'usuarios_list'}):this.usuarios=mb.instance('Usuarios');
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
@import "usuarios_form.css";
</style>

