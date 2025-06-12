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
          <span>Deportes</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class=" row col-md-6">
      <h3>Deportes</h3>
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
          <div class="col-md-6" style="text-align: end;"></div>
        </div>
      </div>
    </div>
    <div>
      <a-modal
        @cancel="onCloseModal"
        :title="selected_deporte.get_id() ? 'Actualizar deporte' : 'Añadir deporte'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <deporte_form :modal="true" :model="selected_deporte" />
      </a-modal>
      <div style="margin-left: 15px">
        <deporte_table
          :columns="columns"
          table_name="Deporte"
          id_table="id_deporte"
          ref="deporte_table"
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
import deporte_form from "../form/deporte_form";
import deporte_table from "./deporte.table";

export default {
  name: "deporte_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.deporte_table.load_data();
      },
      setSelectedDeporte: this.setSelectedDeporte,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Deporte").columns,
      selected_deporte: mb.instance("Deporte"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["categoria", "deporte_padre", "regla"] },
      mb,
    };
  },
  components: {
    deporte_form,
    deporte_table,
  },
  methods: {
    setSelectedDeporte(model) {
      this.selected_deporte = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_deporte = mb.instance("Deporte");
      this.show_modal_form = false;
      reload_data ? this.$refs.deporte_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.deporte_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics("Deporte").delete_by_ids(_this.$refs.deporte_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.deporte_table.selectedRowKeys = [];
            _this.$refs.deporte_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.deporte_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "deporte_list.css";
</style>
