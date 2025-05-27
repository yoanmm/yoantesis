<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Listado de Reclamacion</h4>
      </div>
      <div class="col-md-5">
        <a-breadcrumb>
          <a-breadcrumb-item href="">
            <a-icon type="home" />
            <router-link :to="{name:'index'}">Inicio</router-link>
          </a-breadcrumb-item>
          <a-breadcrumb-item href="">
            <span>General</span>
          </a-breadcrumb-item>
          <a-breadcrumb-item>
           <span>Reclamacion</span>
          </a-breadcrumb-item>
        </a-breadcrumb>
       </div>
      </div>
    <div class="container">
    <div>
      <div class="row">
        <div class="col-md-6">
          <a-button-group style="margin-bottom: 10px">
            <a-tooltip placement="topLeft" title="Añadir nuevo elemento">
              <a-button icon="plus" type="primary" @click="show_form">Añadir</a-button>
            </a-tooltip>
            <a-tooltip placement="topLeft" title="Eliminar elementos seleccionados">
              <a-button icon="delete" type="danger" @click="showDeleteConfirm">Eliminar</a-button>
            </a-tooltip>
          </a-button-group>
        </div>
        <div class="col-md-6" style="text-align: end;">
        </div>
      </div>
     </div>
    </div>
   <div>
      <a-modal
        @cancel="onCloseModal"
        :title="selected_reclamacion.get_id()?'Actualizar reclamacion':'Añadir reclamacion'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <reclamacion_form  :modal=true :model="selected_reclamacion" />
      </a-modal>
      <reclamacion_table
       :columns="columns"
       table_name="Reclamacion"
       id_table="id_reclamacion"
       ref="reclamacion_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import reclamacion_form from "../form/reclamacion_form";
import reclamacion_table from "./reclamacion.table";

export default {
  name: "reclamacion_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.reclamacion_table.load_data()
        },
        setSelectedReclamacion: this.setSelectedReclamacion
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Reclamacion').columns,
      selected_reclamacion: mb.instance( 'Reclamacion'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:['delegacion','sancion','estado']},
      mb
    };
  },
  components: {
    reclamacion_form,
    reclamacion_table
  },
  methods: {
    setSelectedReclamacion(model) {
      this.selected_reclamacion = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_reclamacion = mb.instance('Reclamacion');
      this.show_modal_form = false;
      reload_data ? this.$refs.reclamacion_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.reclamacion_table.selectedRowKeys.length === 0) {
        utils.openNotificationWithIcon(
          "error",
          "Eliminar elementos seleccionados",
          "Debe seleccionar al menos un elemento"
        );
        return;
      }
      let _this = this;
      this.$confirm({
        title: "Eliminar elementos seleccionados?",
        icon: "delete",
        // icon:()=>{return ( <a-icon type="delete" style="color:red"/> )},
        okText: "Si",
        okType: "danger",
        class: "delete_confirm",
        cancelText: "No",
        async onOk() {
          try {
            const response = await mb.statics('Reclamacion').delete_by_ids(
                _this.$refs.reclamacion_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.reclamacion_table.selectedRowKeys=[];
              _this.$refs.reclamacion_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.reclamacion_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "reclamacion_list.css";
</style>

