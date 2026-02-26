<template>
  <div>
    <div class="row row-breadcrumb">
      <a-breadcrumb>
        <a-breadcrumb-item href="">
          <a-icon type="home" />
          <router-link :to="{ name: 'index' }">Inicio</router-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item href="">
          <span>Configuración</span>
        </a-breadcrumb-item>
        <a-breadcrumb-item>
          <span>Estado de reclamación</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class="row col-md-6">
      <h3>Estado de reclamación</h3>
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
        </div>
      </div>
    </div>
    <div>
      <a-modal
        @cancel="onCloseModal"
        :title="selected_reclamacion_estado.get_id() ? 'Actualizar estado' : 'Añadir estado'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <reclamacion_estado_form :modal="true" :model="selected_reclamacion_estado" />
      </a-modal>
      <div style="margin-left: 15px">
        <reclamacion_estado_table
          :columns="columns"
          table_name="Reclamacion_estado"
          id_table="id_estado"
          ref="reclamacion_estado_table"
          :params_search="params_search"
          :paginate="paginate"
        />
      </div>
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import reclamacion_estado_form from "../form/reclamacion_estado_form";
import reclamacion_estado_table from "./reclamacion_estado.table";

export default {
  name: "reclamacion_estado_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.reclamacion_estado_table.load_data();
      },
      setSelectedReclamacion_estado: this.setSelectedReclamacion_estado,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Reclamacion_estado").columns,
      selected_reclamacion_estado: mb.instance("Reclamacion_estado"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: [] },
      mb,
    };
  },
  components: {
    reclamacion_estado_form,
    reclamacion_estado_table,
  },
  methods: {
    setSelectedReclamacion_estado(model) {
      this.selected_reclamacion_estado = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_reclamacion_estado = mb.instance("Reclamacion_estado");
      this.show_modal_form = false;
      reload_data ? this.$refs.reclamacion_estado_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.reclamacion_estado_table.selectedRowKeys.length === 0) {
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
            const response = await mb
              .statics("Reclamacion_estado")
              .delete_by_ids(_this.$refs.reclamacion_estado_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.reclamacion_estado_table.selectedRowKeys = [];
            _this.$refs.reclamacion_estado_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.reclamacion_estado_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "reclamacion_estado_list.css";
</style>
