<template>
  <div>
    <div class="row row-breadcrumb">
      <a-breadcrumb>
        <a-breadcrumb-item href="">
          <a-icon type="home" />
          <router-link :to="{ name: 'index' }">Inicio</router-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item href="">
          <span>Security</span>
        </a-breadcrumb-item>
        <a-breadcrumb-item>
          <span>Rol_permiso</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class="row col-md-6">
      <h3>Listado de Rol_permiso</h3>
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
        :title="selected_rol_permiso.get_id() ? 'Actualizar rol_permiso' : 'Añadir rol_permiso'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <rol_permiso_form :modal="true" :model="selected_rol_permiso" />
      </a-modal>
      <div style="margin-left: 15px">
        <rol_permiso_table
          :columns="columns"
          table_name="Rol_permiso"
          id_table="id_rol_permiso"
          ref="rol_permiso_table"
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
import rol_permiso_form from "../form/rol_permiso_form";
import rol_permiso_table from "./rol_permiso.table";

export default {
  name: "rol_permiso_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.rol_permiso_table.load_data();
      },
      setSelectedRol_permiso: this.setSelectedRol_permiso,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Rol_permiso").columns,
      selected_rol_permiso: mb.instance("Rol_permiso"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["permiso", "rol"] },
      mb,
    };
  },
  components: {
    rol_permiso_form,
    rol_permiso_table,
  },
  methods: {
    setSelectedRol_permiso(model) {
      this.selected_rol_permiso = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_rol_permiso = mb.instance("Rol_permiso");
      this.show_modal_form = false;
      reload_data ? this.$refs.rol_permiso_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.rol_permiso_table.selectedRowKeys.length === 0) {
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
              .statics("Rol_permiso")
              .delete_by_ids(_this.$refs.rol_permiso_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.rol_permiso_table.selectedRowKeys = [];
            _this.$refs.rol_permiso_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.rol_permiso_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "rol_permiso_list.css";
</style>
