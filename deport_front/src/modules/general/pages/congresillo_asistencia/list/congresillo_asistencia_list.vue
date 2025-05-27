<template>
  <div>
    <div class="row row-breadcrumb">
      <div class="col-md-6">
        <h4>Listado de Congresillo_asistencia</h4>
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
           <span>Congresillo_asistencia</span>
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
        :title="selected_congresillo_asistencia.get_id()?'Actualizar congresillo_asistencia':'Añadir congresillo_asistencia'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <congresillo_asistencia_form  :modal=true :model="selected_congresillo_asistencia" />
      </a-modal>
      <congresillo_asistencia_table
       :columns="columns"
       table_name="Congresillo_asistencia"
       id_table="id_asistencia_congresillo"
       ref="congresillo_asistencia_table"
       :params_search="params_search"
       :paginate="paginate"
      />
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import congresillo_asistencia_form from "../form/congresillo_asistencia_form";
import congresillo_asistencia_table from "./congresillo_asistencia.table";

export default {
  name: "congresillo_asistencia_list",
    provide: function(){
      return{
        close_modal: this.onCloseModal,
        show_form: this.show_form,
        load_data: () => {
           this.$refs.congresillo_asistencia_table.load_data()
        },
        setSelectedCongresillo_asistencia: this.setSelectedCongresillo_asistencia
      }
    },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics('Congresillo_asistencia').columns,
      selected_congresillo_asistencia: mb.instance( 'Congresillo_asistencia'),
      show_modal_form: false,
      paginate:false,
      params_search:{relations:['delegacion','congresillo']},
      mb
    };
  },
  components: {
    congresillo_asistencia_form,
    congresillo_asistencia_table
  },
  methods: {
    setSelectedCongresillo_asistencia(model) {
      this.selected_congresillo_asistencia = model
    },
    onCloseModal(e,reload_data=false) {
      this.selected_congresillo_asistencia = mb.instance('Congresillo_asistencia');
      this.show_modal_form = false;
      reload_data ? this.$refs.congresillo_asistencia_table.load_data() : ''
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.congresillo_asistencia_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics('Congresillo_asistencia').delete_by_ids(
                _this.$refs.congresillo_asistencia_table.selectedRowKeys
              );
               utils.process_response(response, "deleted");
              _this.$refs.congresillo_asistencia_table.selectedRowKeys=[];
              _this.$refs.congresillo_asistencia_table.load_data();
            } catch (error) {
              utils.process_error(error);
              _this.$refs.congresillo_asistencia_table.selectedRowKeys=[];
            }
        },
        onCancel() {}
      });
    },
  },
};
</script>

<style>
@import "congresillo_asistencia_list.css";
</style>

