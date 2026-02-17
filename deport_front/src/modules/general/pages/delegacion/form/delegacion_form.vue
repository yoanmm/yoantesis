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

        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Reglamento</label>
          <input
            type="file"
            name="reglamento"
            accept=".pdf,.doc,.docx,.txt"
            @change="onReglamentoChange"
            class="form-control"
          />
          <div v-if="previewReglamentoName" class="mt-2">
            <a :href="previewReglamentoUrl" target="_blank" rel="noopener">{{ previewReglamentoName }}</a>
            <a-button type="link" @click="removeReglamento">Eliminar</a-button>
          </div>
        </tc-form-item>

      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Logo</label>

        <input
          type="file"
          name="logo"
          accept=".png,.jpg,.jpeg"
          @change="onLogoChange"
          class="form-control"
          ref="logo_input"
        />

        <!-- PREVIEW -->
        <img
          v-if="previewLogo || delegacion.logo"
          :src="previewLogo || resolveIconUrl(delegacion.logo)"
          alt="Preview Logo"
          class="img-thumbnail mt-2"
          style="max-height: 120px"
        />
        <div v-if="previewLogo || delegacion.logo" class="mt-2">
          <a-button type="link" @click="removeLogo">Eliminar</a-button>
        </div>
      </tc-form-item>

      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Mascota</label>

        <input
          type="file"
          name="mascota"
          accept=".png,.jpg,.jpeg,.svg"
          @change="onMascotaChange"
          class="form-control"
          ref="mascota_input"
        />

        <!-- PREVIEW -->
        <img
          v-if="previewMascota || delegacion.mascota"
          :src="previewMascota || resolveIconUrl(delegacion.mascota)"
          alt="Preview Mascota"
          class="img-thumbnail mt-2"
          style="max-height: 120px"
        />
        <div v-if="previewMascota || delegacion.mascota" class="mt-2">
          <a-button type="link" @click="removeMascota">Eliminar</a-button>
        </div>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
         <label>Color</label>
          <div class="d-flex align-items-center">
            <Chrome :value="colorObject" @input="onColorPickerInput" />
            <input type="text" class="form-control ml-2" :value="delegacion.color || ''" readonly style="max-width: 110px;" />
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
      <!--  <tc-form-item class="form-group mb-0 col-md-6 px-3">
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
        </a-modal> -->
        
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
import { Chrome } from 'vue-color';

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

      //  NUEVO 
      previewLogo: null, 
      previewMascota: null,
      previewReglamentoName: null,
      previewReglamentoUrl: null,
      reglamentoObjectUrl: null,
      logoObjectUrl: null,
      mascotaObjectUrl: null,
      // Color picker state
      colorObject: { hex: '#000000' },
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
    Chrome,
    delegacion_tipo_form,
    delegacion_regla_form,
  },

  watch: {
    'delegacion.logo': {
      immediate: true,
      handler(val) {
        if (val && !this.previewLogo) {
          this.previewLogo = this.resolveIconUrl(val);
        }
      }
    },
    'delegacion.mascota': {
      immediate: true,
      handler(val) {
        if (val && !this.previewMascota) {
          this.previewMascota = this.resolveIconUrl(val);
        }
      }
    },
    'delegacion.reglamento': {
      immediate: true,
      handler(val) {
        if (val && !this.previewReglamentoName) {
          this.previewReglamentoName = this.getFileName(val);
          this.previewReglamentoUrl = this.resolveFileUrl(val);
        }
      }
    },
    'delegacion.color': {
      immediate: true,
      handler(val) {
        // Ensure color is string and reflect it in the picker
        const hex = val || '#000000';
        if (!this.delegacion.color) this.delegacion.color = hex;
        this.colorObject = { hex };
      }
    },
    colorObject: {
      deep: true,
      handler(val) {
        if (val && val.hex) this.delegacion.color = String(val.hex);
      }
    }
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
      onLogoChange(event) {
        const file = event.target.files[0];
        if (file) {
          if (this.logoObjectUrl) {
            URL.revokeObjectURL(this.logoObjectUrl);
            this.logoObjectUrl = null;
          }
          this.logoObjectUrl = URL.createObjectURL(file);
          this.previewLogo = this.logoObjectUrl;
          // Convertir a base64 para almacenamiento
          const reader = new FileReader();
          reader.onload = (e) => {
            this.delegacion.logo = e.target.result; // Almacenar como base64
          };
          reader.readAsDataURL(file);
        }
      },

      onColorPickerInput(color) {
        // color comes as an object from chrome-picker, prefer hex
        if (color && color.hex) {
          this.colorObject = color;
        }
      },

      onMascotaChange(event) {
        const file = event.target.files[0];
        if (file) {
          if (this.mascotaObjectUrl) {
            URL.revokeObjectURL(this.mascotaObjectUrl);
            this.mascotaObjectUrl = null;
          }
          this.mascotaObjectUrl = URL.createObjectURL(file);
          this.previewMascota = this.mascotaObjectUrl;
          // Convertir a base64 para almacenamiento
          const reader = new FileReader();
          reader.onload = (e) => {
            this.delegacion.mascota = e.target.result; // Almacenar como base64
          };
          reader.readAsDataURL(file);
        }
      },

      onReglamentoChange(event) {
        const file = event.target.files[0];
        if (file) {
          if (this.reglamentoObjectUrl) {
            URL.revokeObjectURL(this.reglamentoObjectUrl);
            this.reglamentoObjectUrl = null;
          }
          this.reglamentoObjectUrl = URL.createObjectURL(file);
          this.previewReglamentoName = file.name;
          this.previewReglamentoUrl = this.reglamentoObjectUrl;
          // Convertir a base64 para almacenamiento
          const reader = new FileReader();
          reader.onload = (e) => {
            this.delegacion.reglamento = e.target.result; // Almacenar como base64
          };
          reader.readAsDataURL(file);
        }
      },

      removeLogo() {
        // Revoke any object URL
        if (this.logoObjectUrl) {
          URL.revokeObjectURL(this.logoObjectUrl);
          this.logoObjectUrl = null;
        }
        if (this.previewLogo && this.previewLogo.startsWith && this.previewLogo.startsWith('blob:')) {
          URL.revokeObjectURL(this.previewLogo);
        }
        this.delegacion.logo = null;
        this.previewLogo = null;
        if (this.$refs.logo_input) this.$refs.logo_input.value = null;
      },

      removeMascota() {
        // Revoke any object URL
        if (this.mascotaObjectUrl) {
          URL.revokeObjectURL(this.mascotaObjectUrl);
          this.mascotaObjectUrl = null;
        }
        if (this.previewMascota && this.previewMascota.startsWith && this.previewMascota.startsWith('blob:')) {
          URL.revokeObjectURL(this.previewMascota);
        }
        this.delegacion.mascota = null;
        this.previewMascota = null;
        if (this.$refs.mascota_input) this.$refs.mascota_input.value = null;
      },

      resolveIconUrl(icon) {
        if (!icon || typeof icon !== 'string') return null;
        if (icon.startsWith('data:')) return icon; // already base64
        if (icon.startsWith('http://') || icon.startsWith('https://')) return icon;
        if (icon.startsWith('/')) return window.location.origin + icon;
        if (process.env.VUE_APP_API_URL) return process.env.VUE_APP_API_URL.replace(/\/+$/,'') + '/uploads/' + icon;
        return window.location.origin + '/uploads/' + icon;
      },

      resolveFileUrl(file) {
        return this.resolveIconUrl(file);
      },

      getFileName(path) {
        if (!path) return null;
        if (path.startsWith('data:')) return 'Documento cargado';
        try {
          const name = path.split('/').pop().split('\\').pop();
          return decodeURIComponent(name);
        } catch (e) { return path; }
      },

      removeReglamento() {
        this.delegacion.reglamento = null;
        this.previewReglamentoName = null;
        if (this.reglamentoObjectUrl) {
          URL.revokeObjectURL(this.reglamentoObjectUrl);
          this.reglamentoObjectUrl = null;
        }
        this.previewReglamentoUrl = null;
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
        
        // Limpiar campos vacíos o no válidos
        if (!this.delegacion.mascota || typeof this.delegacion.mascota !== 'string') {
          this.delegacion.mascota = null;
        }
        if (!this.delegacion.logo || typeof this.delegacion.logo !== 'string') {
          this.delegacion.logo = null;
        }
        if (!this.delegacion.reglamento || typeof this.delegacion.reglamento !== 'string') {
          this.delegacion.reglamento = null;
        }
        // Asegurar que color se envíe como string (hex)
        try {
          this.delegacion.color = String(this.delegacion.color || this.colorObject.hex || '#000000');
        } catch (e) {}
        
        const accion=this.delegacion.get_id() ? "actualizado" : "añadido";
        this.delegacion
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              // Actualizar las URLs de los archivos desde la respuesta del servidor
              if (response.data && response.data.data) {
                const data = response.data.data;
                if (data.logo) {
                  this.delegacion.logo = data.logo;
                  this.previewLogo = this.resolveIconUrl(data.logo);
                }
                if (data.mascota) {
                  this.delegacion.mascota = data.mascota;
                  this.previewMascota = this.resolveIconUrl(data.mascota);
                }
                if (data.reglamento) {
                  this.delegacion.reglamento = data.reglamento;
                  this.previewReglamentoName = this.getFileName(data.reglamento);
                  this.previewReglamentoUrl = this.resolveFileUrl(data.reglamento);
                }
                if (data.color) {
                  this.delegacion.color = data.color;
                  this.colorObject = { hex: data.color };
                }
              }
              
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
  },

  beforeDestroy() {
    if (this.previewLogo && this.previewLogo.startsWith && this.previewLogo.startsWith('blob:')) {
      URL.revokeObjectURL(this.previewLogo);
    }
    if (this.previewMascota && this.previewMascota.startsWith && this.previewMascota.startsWith('blob:')) {
      URL.revokeObjectURL(this.previewMascota);
    }
    if (this.reglamentoObjectUrl) {
      URL.revokeObjectURL(this.reglamentoObjectUrl);
      this.reglamentoObjectUrl = null;
    }
  }
};
</script>

<style scoped>
@import "delegacion_form.css";
</style>

