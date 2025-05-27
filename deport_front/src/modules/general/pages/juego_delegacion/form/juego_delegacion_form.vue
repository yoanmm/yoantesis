<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Juego_delegacion').feedbacks"
        :vobject="$v"
        nested="juego_delegacion"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Juego</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Juego"
              name="id_juego"
              ref="select_juego"
              :successFeed="false"
              idKey="id_juego"
              textKey="fecha_inicio"
              :defaultValue="juego_delegacion.id_juego"
              v-model="juego_delegacion.id_juego"
              :url="mb.statics('Juego').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatejuego">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatejuego = false"
          v-if="showModalCreatejuego"
          class="modal-form"
          :title="'Añadir Juego'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <juego_form :model="null" :modal="true" @close_modal="juegoAdded"/>
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
              :defaultValue="juego_delegacion.id_delegacion"
              v-model="juego_delegacion.id_delegacion"
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
      <tc-form-item class="form-group px-3 col-12">
        <label>Resultados</label>
        <tc-input :text_area="true" size="large" name="resultados" v-model="juego_delegacion.resultados"/>
      </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!juego_delegacion.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!juego_delegacion.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import juego_form from '@/modules/general/pages/juego/form/juego_form';
  import delegacion_form from '@/modules/general/pages/delegacion/form/delegacion_form';

export default {
  name: "juego_delegacion_form",
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
  validations: mb.statics('Juego_delegacion').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      juego_delegacion: mb.instance( 'Juego_delegacion'),
      showModalCreatejuego: false,
      juego_list: [],
      showModalCreatedelegacion: false,
      delegacion_list: [],
    };
  },
  computed: {
    juego_delegacionFeedbacks() {
      return mb.statics('Juego_delegacion').feedbacks;
    },
    button_text() {
      return this.juego_delegacion.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.juego_delegacion = mb.instance( 'Juego_delegacion',this.model);
  },
  components: {
    juego_form,
    delegacion_form,
  },
  methods: {
      openModalCreatejuego() {
        this.showModalCreatejuego = true;
      },
      juegoAdded(refresh) {
        this.showModalCreatejuego = false;
        refresh?this.refreshjuego():'';
      },
      async refreshjuego() {
        this.loading = true;
        await this.$refs.select_juego.load();
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
        this.modal?this.close_modal(null,false):this.$router.push({name: 'juego_delegacion_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.juego_delegacion.get_id() ? "actualizado" : "añadido";
        this.juego_delegacion
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'juego_delegacion_list'}):this.juego_delegacion=mb.instance('Juego_delegacion');
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
@import "juego_delegacion_form.css";
</style>

