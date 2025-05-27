<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Equipo').feedbacks"
        :vobject="$v"
        nested="equipo"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre_equipo</label>
        <tc-input placeholder='Ingrese el valor' name='nombre_equipo' v-model="equipo.nombre_equipo"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Competencia</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Competencia"
              name="id_competencia"
              ref="select_competencia"
              :successFeed="false"
              idKey="id_competencia"
              textKey="id_evento"
              :defaultValue="equipo.id_competencia"
              v-model="equipo.id_competencia"
              :url="mb.statics('Competencia').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatecompetencia">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatecompetencia = false"
          v-if="showModalCreatecompetencia"
          class="modal-form"
          :title="'Añadir Competencia'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <competencia_form :model="null" :modal="true" @close_modal="competenciaAdded"/>
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
              :defaultValue="equipo.id_delegacion"
              v-model="equipo.id_delegacion"
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
          <label>Equipo_estado</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Equipo_estado"
              name="id_estado"
              ref="select_estado"
              :successFeed="false"
              idKey="id_estado"
              textKey="estado_equipo"
              :defaultValue="equipo.id_estado"
              v-model="equipo.id_estado"
              :url="mb.statics('Equipo_estado').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateestado">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreateestado = false"
          v-if="showModalCreateestado"
          class="modal-form"
          :title="'Añadir Equipo_estado'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <equipo_estado_form :model="null" :modal="true" @close_modal="estadoAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!equipo.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!equipo.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import competencia_form from '@/modules/general/pages/competencia/form/competencia_form';
  import equipo_estado_form from '@/modules/general/pages/equipo_estado/form/equipo_estado_form';
  import delegacion_form from '@/modules/general/pages/delegacion/form/delegacion_form';

export default {
  name: "equipo_form",
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
  validations: mb.statics('Equipo').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      equipo: mb.instance( 'Equipo'),
      showModalCreatecompetencia: false,
      competencia_list: [],
      showModalCreateestado: false,
      equipo_estado_list: [],
      showModalCreatedelegacion: false,
      delegacion_list: [],
    };
  },
  computed: {
    equipoFeedbacks() {
      return mb.statics('Equipo').feedbacks;
    },
    button_text() {
      return this.equipo.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.equipo = mb.instance( 'Equipo',this.model);
  },
  components: {
    competencia_form,
    equipo_estado_form,
    delegacion_form,
  },
  methods: {
      openModalCreatecompetencia() {
        this.showModalCreatecompetencia = true;
      },
      competenciaAdded(refresh) {
        this.showModalCreatecompetencia = false;
        refresh?this.refreshcompetencia():'';
      },
      async refreshcompetencia() {
        this.loading = true;
        await this.$refs.select_competencia.load();
        this.loading = false;
      },
      openModalCreateestado() {
        this.showModalCreateestado = true;
      },
      estadoAdded(refresh) {
        this.showModalCreateestado = false;
        refresh?this.refreshestado():'';
      },
      async refreshestado() {
        this.loading = true;
        await this.$refs.select_estado.load();
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
        this.modal?this.close_modal(null,false):this.$router.push({name: 'equipo_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.equipo.get_id() ? "actualizado" : "añadido";
        this.equipo
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'equipo_list'}):this.equipo=mb.instance('Equipo');
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
@import "equipo_form.css";
</style>

