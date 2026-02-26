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
          <span>Tipo de delegación</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class=" row col-md-6">
      <h3>Tipo de delegación</h3>
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
        :title="selected_delegacion_tipo.get_id() ? 'Actualizar tipo de delegacion' : 'Añadir tipo de delegacion'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <delegacion_tipo_form :modal="true" :model="selected_delegacion_tipo" />
      </a-modal>
      <div style="margin-left: 15px">
        <delegacion_tipo_table
          :columns="columns"
          table_name="Delegacion_tipo"
          id_table="id_tipo_delegacion"
          ref="delegacion_tipo_table"
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
import delegacion_tipo_form from "../form/delegacion_tipo_form";
import delegacion_tipo_table from "./delegacion_tipo.table";

export default {
  name: "delegacion_tipo_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.delegacion_tipo_table.load_data();
      },
      setSelectedDelegacion_tipo: this.setSelectedDelegacion_tipo,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Delegacion_tipo").columns,
      selected_delegacion_tipo: mb.instance("Delegacion_tipo"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: [] },
      mb,
    };
  },
  components: {
    delegacion_tipo_form,
    delegacion_tipo_table,
  },
  methods: {
    setSelectedDelegacion_tipo(model) {
      this.selected_delegacion_tipo = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_delegacion_tipo = mb.instance("Delegacion_tipo");
      this.show_modal_form = false;
      reload_data ? this.$refs.delegacion_tipo_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.delegacion_tipo_table.selectedRowKeys.length === 0) {
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
              .statics("Delegacion_tipo")
              .delete_by_ids(_this.$refs.delegacion_tipo_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.delegacion_tipo_table.selectedRowKeys = [];
            _this.$refs.delegacion_tipo_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.delegacion_tipo_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "delegacion_tipo_list.css";
</style>
