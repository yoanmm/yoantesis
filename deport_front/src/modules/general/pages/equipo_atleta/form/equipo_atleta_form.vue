<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Equipo_atleta').feedbacks"
        :vobject="$v"
        nested="equipo_atleta"
        ref="form"
        class="form-row"
      >
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Equipo<span class='required_field'>*</span></label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Equipo"
              name="id_equipo"
              ref="select_equipo"
              :successFeed="false"
              idKey="id_equipo"
              textKey="nombre_equipo"
              :defaultValue="equipo_atleta.id_equipo"
              v-model="equipo_atleta.id_equipo"
              :url="mb.statics('Equipo').select_2_url"
            />
          </div>
        </tc-form-item>

        
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Atleta<span class='required_field'>*</span></label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Atleta"
              name="id_atleta"
              ref="select_atleta"
              :successFeed="false"
              idKey="id_atleta"
              textKey="id_persona"
              :defaultValue="equipo_atleta.id_atleta"
              v-model="equipo_atleta.id_atleta"
              :url="mb.statics('Persona_atleta').select_2_url"
            />
            
          </div>
        </tc-form-item>

        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Estado del Atleta<span class='required_field'>*</span></label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Estado"
              name="id_estado_atleta"
              ref="select_estado_atleta"
              :successFeed="false"
              idKey="id_estado"
              textKey="estado_atleta"
              :defaultValue="equipo_atleta.id_estado_atleta"
              v-model="equipo_atleta.id_estado_atleta"
              :url="mb.statics('Atleta_estado').select_2_url"
            />
          </div>
        </tc-form-item>

        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>¿Es Capitán?</label>
          <div>
            <a-switch  v-model="equipo_atleta.capitan"/>
          </div>
        </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>¿Es Subcapitán?</label>
          <div>
            <a-switch  v-model="equipo_atleta.subcapitan"/>
          </div>
        </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!equipo_atleta.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!equipo_atleta.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import equipo_form from '@/modules/general/pages/equipo/form/equipo_form';
  import persona_atleta_form from '@/modules/general/pages/persona_atleta/form/persona_atleta_form';
  import atleta_estado_form from '@/modules/general/pages/atleta_estado/form/atleta_estado_form';

export default {
  name: "equipo_atleta_form",
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
  validations: mb.statics('Equipo_atleta').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      equipo_atleta: mb.instance( 'Equipo_atleta'),
      showModalCreateequipo: false,
      equipo_list: [],
      showModalCreateatleta: false,
      persona_atleta_list: [],
      showModalCreateestado_atleta: false,
      atleta_estado_list: [],
    };
  },
  computed: {
    equipo_atletaFeedbacks() {
      return mb.statics('Equipo_atleta').feedbacks;
    },
    button_text() {
      return this.equipo_atleta.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.equipo_atleta = mb.instance( 'Equipo_atleta',this.model);
  },
  components: {
    equipo_form,
    persona_atleta_form,
    atleta_estado_form,
  },
  methods: {
      openModalCreateequipo() {
        this.showModalCreateequipo = true;
      },
      equipoAdded(refresh) {
        this.showModalCreateequipo = false;
        refresh?this.refreshequipo():'';
      },
      async refreshequipo() {
        this.loading = true;
        await this.$refs.select_equipo.load();
        this.loading = false;
      },
      openModalCreateatleta() {
        this.showModalCreateatleta = true;
      },
      atletaAdded(refresh) {
        this.showModalCreateatleta = false;
        refresh?this.refreshatleta():'';
      },
      async refreshatleta() {
        this.loading = true;
        await this.$refs.select_atleta.load();
        this.loading = false;
      },
      openModalCreateestado_atleta() {
        this.showModalCreateestado_atleta = true;
      },
      estado_atletaAdded(refresh) {
        this.showModalCreateestado_atleta = false;
        refresh?this.refreshestado_atleta():'';
      },
      async refreshestado_atleta() {
        this.loading = true;
        await this.$refs.select_estado_atleta.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'equipo_atleta_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        // Convertir booleanos a 0/1 para tinyint
        this.equipo_atleta.capitan = this.equipo_atleta.capitan ? 1 : 0;
        this.equipo_atleta.subcapitan = this.equipo_atleta.subcapitan ? 1 : 0;
        
        const accion=this.equipo_atleta.get_id() ? "actualizado" : "añadido";
        this.equipo_atleta
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'equipo_atleta_list'}):this.equipo_atleta=mb.instance('Equipo_atleta');
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
@import "equipo_atleta_form.css";
</style>

