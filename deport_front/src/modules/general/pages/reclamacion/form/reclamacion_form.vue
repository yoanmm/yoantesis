<template>
  <div ref="form_container" class="card position-relative mb-0" v-on:keyup.enter="save_model()">
    <spinner v-if="loading" />
    <div class="card-body p-0" >

      <tc-form
        :feedbacks="mb.statics('Reclamacion').feedbacks"
        :vobject="$v"
        nested="reclamacion"
        ref="form"
        class="form-row"
      >
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Id_reclamacion<span class='required_field'>*</span></label>
        <tc-input placeholder='Ingrese el valor'   type_car='num'  name='id_reclamacion' v-model="reclamacion.id_reclamacion"></tc-input>
      </tc-form-item>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Fecha_reclamacion</label>
          <div class="d-flex flex-row">
            <tc-date-picker name="fecha_reclamacion" v-model="reclamacion.fecha_reclamacion"></tc-date-picker>
          </div>
        </tc-form-item>
      <tc-form-item class="form-group mb-0 col-md-6 px-3">
        <label>Descripcion_reclamacion</label>
        <tc-input placeholder='Ingrese el valor' name='descripcion_reclamacion' v-model="reclamacion.descripcion_reclamacion"></tc-input>
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
              :defaultValue="reclamacion.id_delegacion"
              v-model="reclamacion.id_delegacion"
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
          <label>Sancion</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Sancion"
              name="id_sancion"
              ref="select_sancion"
              :successFeed="false"
              idKey="id_sancion"
              textKey="fecha_sancion"
              :defaultValue="reclamacion.id_sancion"
              v-model="reclamacion.id_sancion"
              :url="mb.statics('Sancion').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreatesancion">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreatesancion = false"
          v-if="showModalCreatesancion"
          class="modal-form"
          :title="'Añadir Sancion'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <sancion_form :model="null" :modal="true" @close_modal="sancionAdded"/>
        </a-modal>
        <tc-form-item class="form-group mb-0 col-md-6 px-3">
          <label>Reclamacion_estado</label>
          <div class="d-flex flex-row">
            <tc-autocomplete
              placeholder="Seleccione el Reclamacion_estado"
              name="id_estado"
              ref="select_estado"
              :successFeed="false"
              idKey="id_estado"
              textKey="nombre_estado"
              :defaultValue="reclamacion.id_estado"
              v-model="reclamacion.id_estado"
              :url="mb.statics('Reclamacion_estado').select_2_url"
            />
            <a-button type="dashed"
                      icon="plus"
                      class="dashed-primary rounded mt-1 ml-2"
                      @click="openModalCreateestado">
            </a-button>
          </div>
        </tc-form-item>

        <a-modal
          @cancel="showModalCreateestado = false"
          v-if="showModalCreateestado"
          class="modal-form"
          :title="'Añadir Reclamacion_estado'"
          :visible="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <reclamacion_estado_form :model="null" :modal="true" @close_modal="estadoAdded"/>
        </a-modal>
      </tc-form>
    </div>
    <div class="card-footer p-0">
      <a-button-group style="margin-bottom: 10px;margin-top: 10px">
        <a-tooltip placement="topLeft" :title="!reclamacion.get_id()  ? 'Añadir nuevo elemento':'Actualizar elemento'">
          <a-button :disabled="loading"  type="primary"  @click="save_model()">{{button_text}}</a-button>
        </a-tooltip>
        <a-tooltip placement="topLeft" title="Añadir y resetear para insertar nuevo elemento">
          <a-button v-if="!reclamacion.get_id()" :disabled="loading"  type="primary" @click="save_model(true)">Añadir y nuevo</a-button>
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
  import sancion_form from '@/modules/general/pages/sancion/form/sancion_form';
  import reclamacion_estado_form from '@/modules/general/pages/reclamacion_estado/form/reclamacion_estado_form';

export default {
  name: "reclamacion_form",
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
  validations: mb.statics('Reclamacion').validations,
  data() {
    return {
      loading: false,
      mb,      // This property is for load static or instance class
      reclamacion: mb.instance( 'Reclamacion'),
      showModalCreatedelegacion: false,
      delegacion_list: [],
      showModalCreatesancion: false,
      sancion_list: [],
      showModalCreateestado: false,
      reclamacion_estado_list: [],
    };
  },
  computed: {
    reclamacionFeedbacks() {
      return mb.statics('Reclamacion').feedbacks;
    },
    button_text() {
      return this.reclamacion.get_id() ? "Actualizar" : "Añadir";
    },
  },

  mounted: function() {
    this.reclamacion = mb.instance( 'Reclamacion',this.model);
  },
  components: {
    delegacion_form,
    sancion_form,
    reclamacion_estado_form,
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
      openModalCreatesancion() {
        this.showModalCreatesancion = true;
      },
      sancionAdded(refresh) {
        this.showModalCreatesancion = false;
        refresh?this.refreshsancion():'';
      },
      async refreshsancion() {
        this.loading = true;
        await this.$refs.select_sancion.load();
        this.loading = false;
      },
      openModalCreateestado() {
        this.showModalCreateestado = true;
      },
      estadoAdded(refresh) {
        this.showModalCreateestado = false;
        refresh?this.refreshestado():'';
      },
      async refreshestado() {
        this.loading = true;
        await this.$refs.select_estado.load();
        this.loading = false;
      },
      cancel(){
        if (!this.model) {
          this.$emit('close_modal',false)
        } else {
        this.modal?this.close_modal(null,false):this.$router.push({name: 'reclamacion_list'})
       }
      },
    save_model(and_new=false) {
      if (this.$refs.form.validate()) {
        this.loading = true;
        const accion=this.reclamacion.get_id() ? "actualizado" : "añadido";
        this.reclamacion
          .save()
          .then((response) => {
            if(utils.process_response(response,accion)) {
              if (!this.model && !and_new && this.modal) {

                  this.$emit('close_modal',true)
                  return;
               }
                else {
                   !and_new?this.modal?this.close_modal(null,true):this.$router.push({name: 'reclamacion_list'}):this.reclamacion=mb.instance('Reclamacion');
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
@import "reclamacion_form.css";
</style>

