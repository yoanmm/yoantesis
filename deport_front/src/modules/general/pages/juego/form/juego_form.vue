<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Juego').feedbacks"
        :vobject="$v"
        nested="juego"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Fecha_inicio</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="fecha_inicio" v-model="juego.fecha_inicio"></tc-date-picker>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Fecha_fin</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="fecha_fin" v-model="juego.fecha_fin"></tc-date-picker>
          </div>
        </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Descripcion_juego</label>
        <tc-input placeholder='Ingrese el valor' name='descripcion_juego' v-model="juego.descripcion_juego"></tc-input>
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
              :defaultValue="juego.id_competencia"
              v-model="juego.id_competencia"
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
          <label>Juego_fase</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Juego_fase"
              name="id_fase"
              ref="select_fase"
              :successFeed="false"
              idKey="id_fase"
              textKey="nombre_fase"
              :defaultValue="juego.id_fase"
              v-model="juego.id_fase"
              :url="mb.statics('Juego_fase').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatefase">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatefase = false"
          v-if="showModalCreatefase"
          class="modal-form"
          :title="'Añadir Juego_fase'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <juego_fase_form :model="null" :modal="true" @close_modal="faseAdded"/>
        </a-modal>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Cancha</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Cancha"
              name="id_cancha"
              ref="select_cancha"
              :successFeed="false"
              idKey="id_cancha"
              textKey="nombre_cancha"
              :defaultValue="juego.id_cancha"
              v-model="juego.id_cancha"
              :url="mb.statics('Cancha').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatecancha">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatecancha = false"
          v-if="showModalCreatecancha"
          class="modal-form"
          :title="'Añadir Cancha'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <cancha_form :model="null" :modal="true" @close_modal="canchaAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!juego.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!juego.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import juego_fase_form from '@/modules/general/pages/juego_fase/form/juego_fase_form';
  import cancha_form from '@/modules/general/pages/cancha/form/cancha_form';

export default {
  name: "juego_form",
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
  validations: mb.statics('Juego').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      juego: mb.instance( 'Juego'),
      showModalCreatecompetencia: false,
      competencia_list: [],
      showModalCreatefase: false,
      juego_fase_list: [],
      showModalCreatecancha: false,
      cancha_list: [],
    };
  },
  computed: {
    juegoFeedbacks() {
      return mb.statics('Juego').feedbacks;
    },
    button_text() {
      return this.juego.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.juego = mb.instance( 'Juego',this.model);
  },
  components: {
    competencia_form,
    juego_fase_form,
    cancha_form,
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
      openModalCreatefase() {
        this.showModalCreatefase = true;
      },
      faseAdded(refresh) {
        this.showModalCreatefase = false;
        refresh?this.refreshfase():'';
      },
      async refreshfase() {
        this.loading = true;
        await this.$refs.select_fase.load();
        this.loading = false;
      },
      openModalCreatecancha() {
        this.showModalCreatecancha = true;
      },
      canchaAdded(refresh) {
        this.showModalCreatecancha = false;
        refresh?this.refreshcancha():'';
      },
      async refreshcancha() {
        this.loading = true;
        await this.$refs.select_cancha.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'juego_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.juego.get_id() ? "actualizado" : "añadido";
        this.juego
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'juego_list'}):this.juego=mb.instance('Juego');
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
@import "juego_form.css";
</style>

