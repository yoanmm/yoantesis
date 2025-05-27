<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Congresillo_deporte').feedbacks"
        :vobject="$v"
        nested="congresillo_deporte"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Fecha_congresillo</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="fecha_congresillo" v-model="congresillo_deporte.fecha_congresillo"></tc-date-picker>
          </div>
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
              :defaultValue="congresillo_deporte.id_competencia"
              v-model="congresillo_deporte.id_competencia"
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
        <a-tooltip placement="topLeft" :title="!congresillo_deporte.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!congresillo_deporte.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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

export default {
  name: "congresillo_deporte_form",
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
  validations: mb.statics('Congresillo_deporte').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      congresillo_deporte: mb.instance( 'Congresillo_deporte'),
      showModalCreatecompetencia: false,
      competencia_list: [],
    };
  },
  computed: {
    congresillo_deporteFeedbacks() {
      return mb.statics('Congresillo_deporte').feedbacks;
    },
    button_text() {
      return this.congresillo_deporte.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.congresillo_deporte = mb.instance( 'Congresillo_deporte',this.model);
  },
  components: {
    competencia_form,
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
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'congresillo_deporte_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.congresillo_deporte.get_id() ? "actualizado" : "añadido";
        this.congresillo_deporte
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'congresillo_deporte_list'}):this.congresillo_deporte=mb.instance('Congresillo_deporte');
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
@import "congresillo_deporte_form.css";
</style>

