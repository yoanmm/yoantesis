<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Persona_atleta').feedbacks"
        :vobject="$v"
        nested="persona_atleta"
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
              @change="personSelected"
              :successFeed="false"
              idKey="id_persona"
              textKey="nombre"
              :defaultValue="persona_atleta.id_persona"
              v-model="persona_atleta.id_persona"
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
          <label>Atleta_tipo</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Atleta_tipo"
              name="id_tipo"
              ref="select_tipo"
              :successFeed="false"
              idKey="id_tipo"
              textKey="tipo_atleta"
              :defaultValue="persona_atleta.id_tipo"
              v-model="persona_atleta.id_tipo"
              :url="mb.statics('Atleta_tipo').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatetipo">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatetipo = false"
          v-if="showModalCreatetipo"
          class="modal-form"
          :title="'Añadir Atleta_tipo'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <atleta_tipo_form :model="null" :modal="true" @close_modal="tipoAdded"/>
        </a-modal>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Foto</label>
        <tc-input placeholder='Ingrese el valor' name='foto' v-model="persona_atleta.foto"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Tamaño</label>
        <tc-input placeholder='Ingrese el valor'   type_car='dec'  name='tamaño' v-model="persona_atleta.tamaño"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Peso</label>
        <tc-input placeholder='Ingrese el valor'   type_car='dec'  name='peso' v-model="persona_atleta.peso"></tc-input>
      </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!persona_atleta.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!persona_atleta.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import atleta_tipo_form from '@/modules/general/pages/atleta_tipo/form/atleta_tipo_form';

export default {
  name: "persona_atleta_form",
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
  validations: mb.statics('Persona_atleta').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      persona_atleta: mb.instance( 'Persona_atleta'),
      showModalCreatepersona: false,
      persona_list: [],
      showModalCreatetipo: false,
      atleta_tipo_list: [],
    };
  },
  computed: {
    persona_atletaFeedbacks() {
      return mb.statics('Persona_atleta').feedbacks;
    },
    button_text() {
      return this.persona_atleta.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.persona_atleta = mb.instance( 'Persona_atleta',this.model);
  },
  components: {
    persona_form,
    atleta_tipo_form,
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
      openModalCreatetipo() {
        this.showModalCreatetipo = true;
      },
      tipoAdded(refresh) {
        this.showModalCreatetipo = false;
        refresh?this.refreshtipo():'';
      },
      async refreshtipo() {
        this.loading = true;
        await this.$refs.select_tipo.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'persona_atleta_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;

        const accion=this.persona_atleta.get_id() ? "actualizado" : "añadido";
        this.persona_atleta
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'persona_atleta_list'}):this.persona_atleta=mb.instance('Persona_atleta');
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
@import "persona_atleta_form.css";
</style>

