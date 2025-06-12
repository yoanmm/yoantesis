<template>
  <div>
    <div class="row row-breadcrumb">
      <a-breadcrumb>
        <a-breadcrumb-item href="">
          <a-icon type="home" />
          <router-link :to="{ name: 'index' }">Inicio</router-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item href="">
          <span>Comisión disciplinaria</span>
        </a-breadcrumb-item>
        <a-breadcrumb-item>
          <span>Sanciones</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class=" row col-md-6">
      <h3>Sanciones</h3>
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
        :title="selected_sancion.get_id() ? 'Actualizar sancion' : 'Añadir sancion'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <sancion_form :modal="true" :model="selected_sancion" />
      </a-modal>
      <div style="margin-left: 15px">
        <sancion_table
          :columns="columns"
          table_name="Sancion"
          id_table="id_sancion"
          ref="sancion_table"
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
import sancion_form from "../form/sancion_form";
import sancion_table from "./sancion.table";

export default {
  name: "sancion_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.sancion_table.load_data();
      },
      setSelectedSancion: this.setSelectedSancion,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Sancion").columns,
      selected_sancion: mb.instance("Sancion"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["delegacion", "competencia"] },
      mb,
    };
  },
  components: {
    sancion_form,
    sancion_table,
  },
  methods: {
    setSelectedSancion(model) {
      this.selected_sancion = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_sancion = mb.instance("Sancion");
      this.show_modal_form = false;
      reload_data ? this.$refs.sancion_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.sancion_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics("Sancion").delete_by_ids(_this.$refs.sancion_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.sancion_table.selectedRowKeys = [];
            _this.$refs.sancion_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.sancion_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "sancion_list.css";
</style>
