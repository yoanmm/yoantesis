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
          <span>Compromiso_participacion</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class="row col-md-6">
      <h3>Listado de Compromiso_participacion</h3>
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
          selected_compromiso_participacion.get_id()
            ? 'Actualizar compromiso_participacion'
            : 'Añadir compromiso_participacion'
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
        <compromiso_participacion_form :modal="true" :model="selected_compromiso_participacion" />
      </a-modal>
      <div style="margin-left: 15px">
        <compromiso_participacion_table
          :columns="columns"
          table_name="Compromiso_participacion"
          id_table="id_compromiso"
          ref="compromiso_participacion_table"
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
import compromiso_participacion_form from "../form/compromiso_participacion_form";
import compromiso_participacion_table from "./compromiso_participacion.table";

export default {
  name: "compromiso_participacion_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.compromiso_participacion_table.load_data();
      },
      setSelectedCompromiso_participacion: this.setSelectedCompromiso_participacion,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Compromiso_participacion").columns,
      selected_compromiso_participacion: mb.instance("Compromiso_participacion"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["delegacion_evento", "deporte"] },
      mb,
    };
  },
  components: {
    compromiso_participacion_form,
    compromiso_participacion_table,
  },
  methods: {
    setSelectedCompromiso_participacion(model) {
      this.selected_compromiso_participacion = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_compromiso_participacion = mb.instance("Compromiso_participacion");
      this.show_modal_form = false;
      reload_data ? this.$refs.compromiso_participacion_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.compromiso_participacion_table.selectedRowKeys.length === 0) {
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
        okText: "Si",
        okType: "danger",
        class: "delete_confirm",
        cancelText: "No",
        async onOk() {
          try {
            const response = await mb
              .statics("Compromiso_participacion")
              .delete_by_ids(_this.$refs.compromiso_participacion_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.compromiso_participacion_table.selectedRowKeys = [];
            _this.$refs.compromiso_participacion_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.compromiso_participacion_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "compromiso_participacion_list.css";
</style>
