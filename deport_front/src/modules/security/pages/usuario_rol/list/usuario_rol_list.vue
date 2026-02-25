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
          <span>Usuario_rol</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class="row col-md-6">
      <h3>Listado de Usuario Rol</h3>
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
        :title="selected_usuario_rol.get_id() ? 'Actualizar usuario_rol' : 'Añadir usuario_rol'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <usuario_rol_form :modal="true" :model="selected_usuario_rol" />
      </a-modal>
      <div style="margin-left: 15px">
        <usuario_rol_table
          :columns="columns"
          table_name="Usuario_rol"
          id_table="id_user_rol"
          ref="usuario_rol_table"
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
import usuario_rol_form from "../form/usuario_rol_form";
import usuario_rol_table from "./usuario_rol.table";

export default {
  name: "usuario_rol_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.usuario_rol_table.load_data();
      },
      setSelectedUsuario_rol: this.setSelectedUsuario_rol,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Usuario_rol").columns,
      selected_usuario_rol: mb.instance("Usuario_rol"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["usuario", "rol"] },
      mb,
    };
  },
  components: {
    usuario_rol_form,
    usuario_rol_table,
  },
  methods: {
    setSelectedUsuario_rol(model) {
      this.selected_usuario_rol = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_usuario_rol = mb.instance("Usuario_rol");
      this.show_modal_form = false;
      reload_data ? this.$refs.usuario_rol_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.usuario_rol_table.selectedRowKeys.length === 0) {
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
              .statics("Usuario_rol")
              .delete_by_ids(_this.$refs.usuario_rol_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.usuario_rol_table.selectedRowKeys = [];
            _this.$refs.usuario_rol_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.usuario_rol_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "usuario_rol_list.css";
</style>
