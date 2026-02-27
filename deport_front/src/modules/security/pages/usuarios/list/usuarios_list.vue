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
          <span>Usuarios</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class="row col-md-6">
      <h3>Usuarios</h3>
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
        :title="selected_usuarios.get_id() ? 'Actualizar usuarios' : 'Añadir usuarios'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <usuarios_form :modal="true" :model="selected_usuarios" />
      </a-modal>
      <div style="margin-left: 15px">
        <usuarios_table
          :columns="columns"
          table_name="Usuarios"
          id_table="id_usuario"
          ref="usuarios_table"
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
import usuarios_form from "../form/usuarios_form";
import usuarios_table from "./usuarios.table";

export default {
  name: "usuarios_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.usuarios_table.load_data();
      },
      setSelectedUsuarios: this.setSelectedUsuarios,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Usuarios").show_columns([
        "username",
        "correo",
        "creado",
        "actualizado",
        "persona.nombre_completo",
        "action_elements",
      ]),
      selected_usuarios: mb.instance("Usuarios"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["persona"] },
      mb,
    };
  },
  components: {
    usuarios_form,
    usuarios_table,
  },
  methods: {
    setSelectedUsuarios(model) {
      this.selected_usuarios = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_usuarios = mb.instance("Usuarios");
      this.show_modal_form = false;
      reload_data ? this.$refs.usuarios_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.usuarios_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics("Usuarios").delete_by_ids(_this.$refs.usuarios_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.usuarios_table.selectedRowKeys = [];
            _this.$refs.usuarios_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.usuarios_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "usuarios_list.css";
</style>
