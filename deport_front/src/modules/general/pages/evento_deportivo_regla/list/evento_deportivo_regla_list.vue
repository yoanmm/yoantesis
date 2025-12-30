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
          <span>Evento_deportivo_regla</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
      <div class="row col-md-6">
        <h3>Listado de Evento_deportivo_regla</h3>
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
        </div>
      </div>
    </div>
    <div>
      <a-modal
        @cancel="onCloseModal"
        :title="
          selected_evento_deportivo_regla.get_id()
            ? 'Actualizar Evento Deportivo_regla'
            : 'Añadir Evento Deportivo_regla'
        "
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <evento_deportivo_regla_form :modal="true" :model="selected_evento_deportivo_regla" />
      </a-modal>
      <div style="margin-left: 15px">
        <evento_deportivo_regla_table
          :columns="columns"
          table_name="Evento_deportivo_regla"
          id_table="id_regla_evento"
          ref="evento_deportivo_regla_table"
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
import evento_deportivo_regla_form from "../form/evento_deportivo_regla_form";
import evento_deportivo_regla_table from "./evento_deportivo_regla.table";

export default {
  name: "evento_deportivo_regla_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.evento_deportivo_regla_table.load_data();
      },
      setSelectedEvento_deportivo_regla: this.setSelectedEvento_deportivo_regla,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Evento_deportivo_regla").columns,
      selected_evento_deportivo_regla: mb.instance("Evento_deportivo_regla"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: [] },
      mb,
    };
  },
  components: {
    evento_deportivo_regla_form,
    evento_deportivo_regla_table,
  },
  methods: {
    setSelectedEvento_deportivo_regla(model) {
      this.selected_evento_deportivo_regla = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_evento_deportivo_regla = mb.instance("Evento_deportivo_regla");
      this.show_modal_form = false;
      reload_data ? this.$refs.evento_deportivo_regla_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.evento_deportivo_regla_table.selectedRowKeys.length === 0) {
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
              .statics("Evento_deportivo_regla")
              .delete_by_ids(_this.$refs.evento_deportivo_regla_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.evento_deportivo_regla_table.selectedRowKeys = [];
            _this.$refs.evento_deportivo_regla_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.evento_deportivo_regla_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "evento_deportivo_regla_list.css";
</style>
