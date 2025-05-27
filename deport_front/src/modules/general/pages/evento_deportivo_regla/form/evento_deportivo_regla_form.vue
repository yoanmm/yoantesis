<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Evento_deportivo_regla').feedbacks"
        :vobject="$v"
        nested="evento_deportivo_regla"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Nombre_regla</label>
        <tc-input placeholder='Ingrese el valor' name='nombre_regla' v-model="evento_deportivo_regla.nombre_regla"></tc-input>
      </tc-form-item>
      <tc-form-item class="form-group px-3 col-12">
        <label>Regla</label>
        <tc-input :text_area="true" size="large" name="regla" v-model="evento_deportivo_regla.regla"/>
      </tc-form-item>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!evento_deportivo_regla.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!evento_deportivo_regla.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  name: "evento_deportivo_regla_form",
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
  validations: mb.statics('Evento_deportivo_regla').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      evento_deportivo_regla: mb.instance( 'Evento_deportivo_regla'),
    };
  },
  computed: {
    evento_deportivo_reglaFeedbacks() {
      return mb.statics('Evento_deportivo_regla').feedbacks;
    },
    button_text() {
      return this.evento_deportivo_regla.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.evento_deportivo_regla = mb.instance( 'Evento_deportivo_regla',this.model);
  },
  components: {
  },
  methods: {
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'evento_deportivo_regla_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.evento_deportivo_regla.get_id() ? "actualizado" : "añadido";
        this.evento_deportivo_regla
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'evento_deportivo_regla_list'}):this.evento_deportivo_regla=mb.instance('Evento_deportivo_regla');
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
@import "evento_deportivo_regla_form.css";
</style>

