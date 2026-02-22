<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Deporte').feedbacks"
        :vobject="$v"
        nested="deporte"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre</label>
        <tc-input placeholder='Ingrese el valor' name='nombre_deporte' v-model="deporte.nombre_deporte"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Individual o no</label>
        <div>
          <a-switch  v-model="deporte.individual"/>
        </div>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Maximo de atletas</label>
        <tc-input placeholder='Ingrese el valor'   type_car='num'  name='max_atleta' v-model="deporte.max_atleta"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Minimo de atletas</label>
        <tc-input placeholder='Ingrese el valor'   type_car='num'  name='min_atleta' v-model="deporte.min_atleta"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Genero</label>
        <a-select
          placeholder="Seleccione el género"
          name="genero"
          v-model="deporte.genero"
        >
          <a-select-option value="M">Masculino</a-select-option>
          <a-select-option value="F">Femenino</a-select-option>
          <a-select-option value="X">Mixto</a-select-option>
        </a-select>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Categoria de puntuacion</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Deporte_categoria_puntuacion"
              name="id_categoria"
              ref="select_categoria"
              :successFeed="false"
              idKey="id_categoria"
              textKey="nombre_categoria"
              :defaultValue="deporte.id_categoria"
              v-model="deporte.id_categoria"
              :url="mb.statics('Deporte_categoria_puntuacion').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatecategoria">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatecategoria = false"
          v-if="showModalCreatecategoria"
          class="modal-form"
          :title="'Añadir Deporte_categoria_puntuacion'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <deporte_categoria_puntuacion_form :model="null" :modal="true" @close_modal="categoriaAdded"/>
        </a-modal>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Icono</label>

        <input
          type="file"
          name="icono_deporte"
          accept=".png,.jpg,.jpeg,.svg"
          @change="onIconoDeporteChange"
          class="form-control"
          ref="icono_input"
        />

        <!-- PREVIEW -->
        <img
          v-if="previewIconoDeporte || deporte.icono_deporte"
          :src="previewIconoDeporte || resolveIconUrl(deporte.icono_deporte)"
          alt="Preview Icono Deporte"
          class="img-thumbnail mt-2"
          style="max-height: 120px"
        />
        <div v-if="previewIconoDeporte || deporte.icono_deporte" class="mt-2">
          <a-button type="link" @click="removeIconoDeporte">Eliminar</a-button>
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
          <label>Deporte Padre</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Deporte"
              name="id_deporte_padre"
              ref="select_deporte_padre"
              :successFeed="false"
              idKey="id_deporte"
              textKey="nombre_deporte"
              :defaultValue="deporte.id_deporte_padre"
              v-model="deporte.id_deporte_padre"
              :url="mb.statics('Deporte').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatedeporte_padre">
            </a-button>
          </div>
        </tc-form-item>
       <!-- <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Deporte regla</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Deporte_regla"
              name="id_regla"
              ref="select_regla"
              :successFeed="false"
              idKey="id_regla_deporte"
              textKey="nombre_regla"
              :defaultValue="deporte.id_regla"
              v-model="deporte.id_regla"
              :url="mb.statics('Deporte_regla').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateregla">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreateregla = false"
          v-if="showModalCreateregla"
          class="modal-form"
          :title="'Añadir Deporte_regla'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <deporte_regla_form :model="null" :modal="true" @close_modal="reglaAdded"/>
        </a-modal> -->

        <a-modal
          @cancel="showModalCreatedeporte_padre = false"
          v-if="showModalCreatedeporte_padre"
          class="modal-form"
          :title="'Añadir Deporte'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <deporte_form :model="null" :modal="true" @close_modal="deporte_padreAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!deporte.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!deporte.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import deporte_categoria_puntuacion_form from '@/modules/general/pages/deporte_categoria_puntuacion/form/deporte_categoria_puntuacion_form';
  import deporte_form from '@/modules/general/pages/deporte/form/deporte_form';
  import deporte_regla_form from '@/modules/general/pages/deporte_regla/form/deporte_regla_form';

export default {
  name: "deporte_form",
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
  validations: mb.statics('Deporte').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      deporte: mb.instance( 'Deporte'),
      showModalCreatecategoria: false,
      deporte_categoria_puntuacion_list: [],
      showModalCreatedeporte_padre: false,
      deporte_list: [],
      showModalCreateregla: false,
      deporte_regla_list: [],
      previewIconoDeporte: null,
      previewReglamentoName: null,
      previewReglamentoUrl: null,
      reglamentoObjectUrl: null,
    };
  },
  computed: {
    deporteFeedbacks() {
      return mb.statics('Deporte').feedbacks;
    },
    button_text() {
      return this.deporte.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.deporte = mb.instance( 'Deporte',this.model);
  },
  components: {
    deporte_categoria_puntuacion_form,
    deporte_form,
    deporte_regla_form,
  },

  watch: {
    'deporte.icono_deporte': {
      immediate: true,
      handler(val) {
        if (val && !this.previewIconoDeporte) {
          this.previewIconoDeporte = this.resolveIconUrl(val);
        }
      }
    },
    'deporte.reglamento': {
      immediate: true,
      handler(val) {
        if (val && !this.previewReglamentoName) {
          this.previewReglamentoName = this.getFileName(val);
          this.previewReglamentoUrl = this.resolveFileUrl(val);
        }
      }
    }
  },
  methods: {
      onIconoDeporteChange(event) {
        const file = event.target.files[0];
        if (file) {
          // Revoke previous blob preview if any
          if (this.previewIconoDeporte && this.previewIconoDeporte.startsWith && this.previewIconoDeporte.startsWith('blob:')) {
            URL.revokeObjectURL(this.previewIconoDeporte);
          }
          this.previewIconoDeporte = URL.createObjectURL(file);
          // Convertir a base64 para almacenamiento
          const reader = new FileReader();
          reader.onload = (e) => {
            this.deporte.icono_deporte = e.target.result; // Almacenar como base64
          };
          reader.readAsDataURL(file);
        }
      },

      removeIconoDeporte() {
        if (this.previewIconoDeporte && this.previewIconoDeporte.startsWith && this.previewIconoDeporte.startsWith('blob:')) {
          URL.revokeObjectURL(this.previewIconoDeporte);
        }
        this.deporte.icono_deporte = null;
        this.previewIconoDeporte = null;
        if (this.$refs.icono_input) this.$refs.icono_input.value = null;
      },

      resolveIconUrl(icon) {
        if (!icon || typeof icon !== 'string') return null;
        if (icon.startsWith('data:')) return icon; // already base64
        if (icon.startsWith('http://') || icon.startsWith('https://')) return icon;
        if (icon.startsWith('/')) return window.location.origin + icon;
        // Fallback: if backend returns only filename, try using env var or /uploads
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
        this.deporte.reglamento = null;
        this.previewReglamentoName = null;
        if (this.reglamentoObjectUrl) {
          URL.revokeObjectURL(this.reglamentoObjectUrl);
          this.reglamentoObjectUrl = null;
        }
        this.previewReglamentoUrl = null;
      },

      onReglamentoChange(event) {
        const file = event.target.files[0];
        if (file) {
          // Mostrar nombre y vista previa usando object URL
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
            this.deporte.reglamento = e.target.result; // Almacenar como base64
          };
          reader.readAsDataURL(file);
        }
      },
      openModalCreatecategoria() {
        this.showModalCreatecategoria = true;
      },
      categoriaAdded(refresh) {
        this.showModalCreatecategoria = false;
        refresh?this.refreshcategoria():'';
      },
      async refreshcategoria() {
        this.loading = true;
        await this.$refs.select_categoria.load();
        this.loading = false;
      },
      openModalCreatedeporte_padre() {
        this.showModalCreatedeporte_padre = true;
      },
      deporte_padreAdded(refresh) {
        this.showModalCreatedeporte_padre = false;
        refresh?this.refreshdeporte_padre():'';
      },
      async refreshdeporte_padre() {
        this.loading = true;
        await this.$refs.select_deporte_padre.load();
        this.loading = false;
      },
      openModalCreateregla() {
        this.showModalCreateregla = true;
      },
      reglaAdded(refresh) {
        this.showModalCreateregla = false;
        refresh?this.refreshregla():'';
      },
      async refreshregla() {
        this.loading = true;
        await this.$refs.select_regla.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'deporte_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        
        // Limpiar campos vacíos o no válidos
        if (!this.deporte.icono_deporte || typeof this.deporte.icono_deporte !== 'string') {
          this.deporte.icono_deporte = null;
        }
        if (!this.deporte.reglamento || typeof this.deporte.reglamento !== 'string') {
          this.deporte.reglamento = null;
        }
        
        const accion=this.deporte.get_id() ? "actualizado" : "añadido";
        // Asegurar que `activo` se envíe como 0/1
        try {
          this.deporte.activo = this.deporte.activo === true || this.deporte.activo === '1' || this.deporte.activo === 1 ? 1 : 0;
        } catch (e) {}

        this.deporte
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              // Actualizar las URLs de los archivos desde la respuesta del servidor
              if (response.data && response.data.data) {
                const data = response.data.data;
              if (data.icono_deporte) {
                this.deporte.icono_deporte = data.icono_deporte;
                this.previewIconoDeporte = this.resolveIconUrl(data.icono_deporte);
              }
                if (data.reglamento) {
                  this.deporte.reglamento = data.reglamento;
                  this.previewReglamentoName = this.getFileName(data.reglamento);
                  this.previewReglamentoUrl = this.resolveFileUrl(data.reglamento);
                }
              }
              
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'deporte_list'}):this.deporte=mb.instance('Deporte');
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
    if (this.previewIconoDeporte && this.previewIconoDeporte.startsWith && this.previewIconoDeporte.startsWith('blob:')) {
      URL.revokeObjectURL(this.previewIconoDeporte);
    }
    if (this.reglamentoObjectUrl) {
      URL.revokeObjectURL(this.reglamentoObjectUrl);
      this.reglamentoObjectUrl = null;
    }
  }
};
</script>

<style scoped>
@import "deporte_form.css";
</style>

