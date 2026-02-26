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
          <span>Categoría de puntuación del deporte</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class=" row col-md-6">
      <h3>Categoría de puntuación del deporte</h3>
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
          selected_deporte_categoria_puntuacion.get_id() ? 'Actualizar Categoria de puntuación': 'Añadir Categoria de puntuación'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <deporte_categoria_puntuacion_form :modal="true" :model="selected_deporte_categoria_puntuacion" />
      </a-modal>
      <div style="margin-left: 15px">
        <deporte_categoria_puntuacion_table
          :columns="columns"
          table_name="Deporte_categoria_puntuacion"
          id_table="id_categoria"
          ref="deporte_categoria_puntuacion_table"
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
import deporte_categoria_puntuacion_form from "../form/deporte_categoria_puntuacion_form";
import deporte_categoria_puntuacion_table from "./deporte_categoria_puntuacion.table";

export default {
  name: "deporte_categoria_puntuacion_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.deporte_categoria_puntuacion_table.load_data();
      },
      setSelectedDeporte_categoria_puntuacion: this.setSelectedDeporte_categoria_puntuacion,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Deporte_categoria_puntuacion").columns,
      selected_deporte_categoria_puntuacion: mb.instance("Deporte_categoria_puntuacion"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: [] },
      mb,
    };
  },
  components: {
    deporte_categoria_puntuacion_form,
    deporte_categoria_puntuacion_table,
  },
  methods: {
    setSelectedDeporte_categoria_puntuacion(model) {
      this.selected_deporte_categoria_puntuacion = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_deporte_categoria_puntuacion = mb.instance("Deporte_categoria_puntuacion");
      this.show_modal_form = false;
      reload_data ? this.$refs.deporte_categoria_puntuacion_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.deporte_categoria_puntuacion_table.selectedRowKeys.length === 0) {
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
              .statics("Deporte_categoria_puntuacion")
              .delete_by_ids(_this.$refs.deporte_categoria_puntuacion_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.deporte_categoria_puntuacion_table.selectedRowKeys = [];
            _this.$refs.deporte_categoria_puntuacion_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.deporte_categoria_puntuacion_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "deporte_categoria_puntuacion_list.css";
</style>
