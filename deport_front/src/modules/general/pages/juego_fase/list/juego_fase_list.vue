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
          <span>Fase del juego</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>

    <div class="row col-md-6">
      <h3>Fase del juego</h3>
    </div>

    <div class="container">
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

    <div>
      <a-modal
        @cancel="onCloseModal"
        :title="selected_juego_fase.get_id() ? 'Actualizar fase' : 'Añadir fase'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <juego_fase_form :modal="true" :model="selected_juego_fase" />
      </a-modal>

      <div style="margin-left: 15px">
        <juego_fase_table
          :columns="columns"
          table_name="Juego_fase"
          id_table="id_fase"
          ref="juego_fase_table"
          :params_search="params_search"
          :paginate="paginate"
        >
          <!-- SLOT PARA LA COLUMNA FINAL -->
         <template #es_final="{ record }">
            <div style="text-align:center;">
              <template v-if="record === 1">
                <a-icon type="check" style="font-size:15px;color:#52c41a;" />
              </template>
              <template v-else>
                <a-icon type="close" style="font-size:15px;color:#ff4d4f;" />
              </template>
            </div>
          </template>
        </juego_fase_table>
      </div>
    </div>
  </div>
</template>

<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import juego_fase_form from "../form/juego_fase_form";
import juego_fase_table from "./juego_fase.table";

export default {
  name: "juego_fase_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.juego_fase_table.load_data();
      },
      setSelectedJuego_fase: this.setSelectedJuego_fase,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Juego_fase").columns,
      selected_juego_fase: mb.instance("Juego_fase"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: [] },
      mb,
    };
  },
  components: {
    juego_fase_form,
    juego_fase_table,
  },
  methods: {
    setSelectedJuego_fase(model) {
      this.selected_juego_fase = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_juego_fase = mb.instance("Juego_fase");
      this.show_modal_form = false;
      reload_data ? this.$refs.juego_fase_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.juego_fase_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics("Juego_fase").delete_by_ids(_this.$refs.juego_fase_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.juego_fase_table.selectedRowKeys = [];
            _this.$refs.juego_fase_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.juego_fase_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "juego_fase_list.css";
</style>
