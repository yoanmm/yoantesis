<template>
  <div>
    <div class="row row-breadcrumb">
      <a-breadcrumb>
        <a-breadcrumb-item href="">
          <a-icon type="home" />
          <router-link :to="{ name: 'index' }">Inicio</router-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item href="">
          <span>Seguridad</span>
        </a-breadcrumb-item>
        <a-breadcrumb-item>
          <span>Trazas</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class="row col-md-6">
      <h3>Trazas</h3>
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
        :title="selected_log.get_id() ? 'Actualizar log' : 'Añadir log'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <log_form :modal="true" :model="selected_log" />
      </a-modal>
      <div style="margin-left: 15px">
        <log_table
          :columns="columns"
          table_name="Log"
          id_table="id"
          ref="log_table"
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
import log_form from "../form/log_form";
import log_table from "./log.table";

export default {
  name: "log_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.log_table.load_data();
      },
      setSelectedLog: this.setSelectedLog,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Log").columns,
      selected_log: mb.instance("Log"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["usuario"] },
      mb,
    };
  },
  components: {
    log_form,
    log_table,
  },
  methods: {
    setSelectedLog(model) {
      this.selected_log = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_log = mb.instance("Log");
      this.show_modal_form = false;
      reload_data ? this.$refs.log_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.log_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics("Log").delete_by_ids(_this.$refs.log_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.log_table.selectedRowKeys = [];
            _this.$refs.log_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.log_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "log_list.css";
</style>
