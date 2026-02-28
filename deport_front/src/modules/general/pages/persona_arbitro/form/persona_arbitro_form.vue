<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Persona_arbitro').feedbacks"
        :vobject="$v"
        nested="persona_arbitro"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Persona</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Persona"
              name="id_persona"
              ref="select_persona"
              :successFeed="false"
              idKey="id_persona"
              textKey="nombre_completo"
              :defaultValue="persona_arbitro.id_persona"
              v-model="persona_arbitro.id_persona"
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
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Deporte</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Deporte"
              name="id_deporte"
              ref="select_deporte"
              :successFeed="false"
              idKey="id_deporte"
              textKey="nombre_deporte"
              :defaultValue="persona_arbitro.id_deporte"
              v-model="persona_arbitro.id_deporte"
              :url="mb.statics('Deporte').select_2_url"
            />
          </div>
        </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!persona_arbitro.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!persona_arbitro.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import deporte_form from '@/modules/general/pages/deporte/form/deporte_form';

export default {
  name: "persona_arbitro_form",
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
  validations: mb.statics('Persona_arbitro').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      persona_arbitro: mb.instance( 'Persona_arbitro'),
      showModalCreatepersona: false,
      persona_list: [],
      showModalCreatedeporte: false,
      deporte_list: [],
    };
  },
  computed: {
    persona_arbitroFeedbacks() {
      return mb.statics('Persona_arbitro').feedbacks;
    },
    button_text() {
      return this.persona_arbitro.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.persona_arbitro = mb.instance( 'Persona_arbitro',this.model);
  },
  components: {
    persona_form,
    deporte_form,
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
      openModalCreatedeporte() {
        this.showModalCreatedeporte = true;
      },
      deporteAdded(refresh) {
        this.showModalCreatedeporte = false;
        refresh?this.refreshdeporte():'';
      },
      async refreshdeporte() {
        this.loading = true;
        await this.$refs.select_deporte.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'persona_arbitro_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.persona_arbitro.get_id() ? "actualizado" : "añadido";
        this.persona_arbitro
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'persona_arbitro_list'}):this.persona_arbitro=mb.instance('Persona_arbitro');
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
@import "persona_arbitro_form.css";
</style>

