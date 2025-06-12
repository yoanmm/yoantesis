<template>
  <div>
    <div class="row row-breadcrumb">
      <a-breadcrumb>
        <a-breadcrumb-item href="">
          <a-icon type="home" />
          <router-link :to="{ name: 'index' }">Inicio</router-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item href="">
          <span>General</span>
        </a-breadcrumb-item>
        <a-breadcrumb-item>
          <span>Delegacion_regla</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class=" row col-md-6">
      <h3>Listado de Delegacion_regla</h3>
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
        :title="selected_delegacion_regla.get_id() ? 'Actualizar delegacion_regla' : 'Añadir delegacion_regla'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <delegacion_regla_form :modal="true" :model="selected_delegacion_regla" />
      </a-modal>
      <div style="margin-left: 15px">
        <delegacion_regla_table
          :columns="columns"
          table_name="Delegacion_regla"
          id_table="id_regla_delegacion"
          ref="delegacion_regla_table"
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
import delegacion_regla_form from "../form/delegacion_regla_form";
import delegacion_regla_table from "./delegacion_regla.table";

export default {
  name: "delegacion_regla_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.delegacion_regla_table.load_data();
      },
      setSelectedDelegacion_regla: this.setSelectedDelegacion_regla,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Delegacion_regla").columns,
      selected_delegacion_regla: mb.instance("Delegacion_regla"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: [] },
      mb,
    };
  },
  components: {
    delegacion_regla_form,
    delegacion_regla_table,
  },
  methods: {
    setSelectedDelegacion_regla(model) {
      this.selected_delegacion_regla = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_delegacion_regla = mb.instance("Delegacion_regla");
      this.show_modal_form = false;
      reload_data ? this.$refs.delegacion_regla_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.delegacion_regla_table.selectedRowKeys.length === 0) {
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
              .statics("Delegacion_regla")
              .delete_by_ids(_this.$refs.delegacion_regla_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.delegacion_regla_table.selectedRowKeys = [];
            _this.$refs.delegacion_regla_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.delegacion_regla_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "delegacion_regla_list.css";
</style>
