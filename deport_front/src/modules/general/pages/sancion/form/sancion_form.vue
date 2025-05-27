<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Sancion').feedbacks"
        :vobject="$v"
        nested="sancion"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Fecha_sancion</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="fecha_sancion" v-model="sancion.fecha_sancion"></tc-date-picker>
          </div>
        </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Razon</label>
        <tc-input placeholder='Ingrese el valor' name='razon' v-model="sancion.razon"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Puntos_sancion</label>
        <tc-input placeholder='Ingrese el valor'   type_car='num'  name='puntos_sancion' v-model="sancion.puntos_sancion"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Suspendido</label>
          <div>
            <a-switch  v-model="sancion.suspendido"/>
          </div>
        </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Juegos_suspendidos</label>
        <tc-input placeholder='Ingrese el valor'   type_car='num'  name='juegos_suspendidos' v-model="sancion.juegos_suspendidos"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Expulsado</label>
          <div>
            <a-switch  v-model="sancion.expulsado"/>
          </div>
        </tc-form-item>
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
              :defaultValue="sancion.id_delegacion"
              v-model="sancion.id_delegacion"
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
          <label>Competencia</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Competencia"
              name="id_competencia"
              ref="select_competencia"
              :successFeed="false"
              idKey="id_competencia"
              textKey="id_evento"
              :defaultValue="sancion.id_competencia"
              v-model="sancion.id_competencia"
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
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!sancion.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!sancion.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import delegacion_form from '@/modules/general/pages/delegacion/form/delegacion_form';
  import competencia_form from '@/modules/general/pages/competencia/form/competencia_form';

export default {
  name: "sancion_form",
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
  validations: mb.statics('Sancion').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      sancion: mb.instance( 'Sancion'),
      showModalCreatedelegacion: false,
      delegacion_list: [],
      showModalCreatecompetencia: false,
      competencia_list: [],
    };
  },
  computed: {
    sancionFeedbacks() {
      return mb.statics('Sancion').feedbacks;
    },
    button_text() {
      return this.sancion.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.sancion = mb.instance( 'Sancion',this.model);
  },
  components: {
    delegacion_form,
    competencia_form,
  },
  methods: {
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
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'sancion_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.sancion.get_id() ? "actualizado" : "añadido";
        this.sancion
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'sancion_list'}):this.sancion=mb.instance('Sancion');
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
@import "sancion_form.css";
</style>

