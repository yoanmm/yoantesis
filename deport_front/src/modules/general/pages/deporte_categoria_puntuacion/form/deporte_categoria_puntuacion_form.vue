<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Deporte_categoria_puntuacion').feedbacks"
        :vobject="$v"
        nested="deporte_categoria_puntuacion"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre_categoria</label>
        <tc-input placeholder='Ingrese el valor' name='nombre_categoria' v-model="deporte_categoria_puntuacion.nombre_categoria"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Puntos</label>
        <tc-input placeholder='Ingrese el valor' name='puntos' v-model="deporte_categoria_puntuacion.puntos"></tc-input>
      </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!deporte_categoria_puntuacion.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!deporte_categoria_puntuacion.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  name: "deporte_categoria_puntuacion_form",
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
  validations: mb.statics('Deporte_categoria_puntuacion').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      deporte_categoria_puntuacion: mb.instance( 'Deporte_categoria_puntuacion'),
    };
  },
  computed: {
    deporte_categoria_puntuacionFeedbacks() {
      return mb.statics('Deporte_categoria_puntuacion').feedbacks;
    },
    button_text() {
      return this.deporte_categoria_puntuacion.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.deporte_categoria_puntuacion = mb.instance( 'Deporte_categoria_puntuacion',this.model);
  },
  components: {
  },
  methods: {
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'deporte_categoria_puntuacion_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.deporte_categoria_puntuacion.get_id() ? "actualizado" : "añadido";
        this.deporte_categoria_puntuacion
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'deporte_categoria_puntuacion_list'}):this.deporte_categoria_puntuacion=mb.instance('Deporte_categoria_puntuacion');
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
@import "deporte_categoria_puntuacion_form.css";
</style>

