<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Persona').feedbacks"
        :vobject="$v"
        nested="persona"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre</label>
        <tc-input placeholder='Ingrese el dato' name='nombre' v-model="persona.nombre"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Apellidos</label>
        <tc-input placeholder='Ingrese el dato' name='apellido' v-model="persona.apellido"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Carnet</label>
        <tc-input placeholder='Ingrese el dato' name='carnet' v-model="persona.carnet"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Género</label>
        <tc-autocomplete
            placeholder="Seleccione el Género"
            name="genero"
            ref="genero"
            :successFeed="false"
            idKey="text"
            textKey="text"
            v-model="persona.genero"
            :data="genero"
        />
      </tc-form-item>

      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Facultad</label>
        <tc-autocomplete
            placeholder="Seleccione el Delegacion"
            name="id_delegacion"
            ref="select_delegacion"
            :successFeed="false"
            idKey="id_delegacion"
            textKey="nombre_delegacion"
            :defaultValue="persona.facultad"
            v-model="persona.facultad"
            :url="mb.statics('Delegacion').select_2_url"
        />
        </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!persona.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!persona.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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

export default {
  name: "persona_form",
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
  validations: mb.statics('Persona').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      persona: mb.instance( 'Persona'),
      genero:[
        {
          text: 'Masculino'
        },
        {
          text: 'Femenino'
        },
        {
          text: 'Mixto'
        }
      ]

    };
  },
  computed: {
    personaFeedbacks() {
      return mb.statics('Persona').feedbacks;
    },
    button_text() {
      return this.persona.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.persona = mb.instance( 'Persona',this.model);
  },
  components: {
  },
  methods: {
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'persona_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.persona.get_id() ? "actualizado" : "añadido";

        console.log("Datos de persona a enviar:", JSON.stringify(this.persona, null, 2));

        this.persona
          .save()
          .then((response) => {
            
            console.log("Respuesta del servidor:", response); // <-- DEBUG

            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'persona_list'}):this.persona=mb.instance('Persona');
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
@import "persona_form.css";
</style>

