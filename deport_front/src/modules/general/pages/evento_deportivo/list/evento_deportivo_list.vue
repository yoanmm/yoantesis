<template>
  <div>
    <div class="row row-breadcrumb">
      <a-breadcrumb>
        <a-breadcrumb-item href="">
          <a-icon type="home" />
          <router-link :to="{ name: 'index' }">Inicio</router-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item href="">
          <span>Gestión Deportiva</span>
        </a-breadcrumb-item>
        <a-breadcrumb-item>
          <span>Eventos deportivos</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class=" row col-md-6">
      <h3>Eventos Deportivos</h3>
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
                <!-- <a-button icon="delete" type="danger" @click="showDeleteConfirm">Eliminar</a-button> -->
              </a-tooltip>
            </a-button-group>
          </div>
        </div>
      </div>
    </div>
    <div>
      <a-modal
          @cancel="onCloseModal"
          :title="selected_evento_deportivo.get_id() ? 'Actualizar Evento Deportivo' : 'Añadir Evento Deportivo'"
          class="modal-form"
          width="55rem"
          :visible="show_modal_form"
          :destroyOnClose="true"
          :header="null"
          :footer="null"
          :maskClosable="false"
      >
        <evento_deportivo_form
            :modal="true"
            :model="selected_evento_deportivo"
            @success="handleFormSuccess"
            @close="onCloseModal"
        />
      </a-modal>
      <div style="margin-left: 15px">
        <evento_deportivo_table
            :columns="columns"
            table_name="Evento_deportivo"
            id_table="id_evento"
            ref="evento_deportivo_table"
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
import evento_deportivo_form from "../form/evento_deportivo_form";
import evento_deportivo_table from "./evento_deportivo.table";

export default {
  name: "evento_deportivo_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.evento_deportivo_table.load_data();
      },
      setSelectedEvento_deportivo: this.setSelectedEvento_deportivo,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Evento_deportivo").show_columns(
          [
            "nombre_evento",
            "fecha_inicio",
            "fecha_fin",
            "curso",
            "terminado",
            "action_elements" ,
          ],
          true
      ),
      selected_evento_deportivo: mb.instance("Evento_deportivo"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["regla_evento"] },
      mb,
    };
  },
  components: {
    evento_deportivo_form,
    evento_deportivo_table,
  },
  methods: {
    setSelectedEvento_deportivo(model) {
      this.selected_evento_deportivo = model;
    },
    // Método para manejar el éxito del formulario
    handleFormSuccess() {
      // Llamamos a onCloseModal indicando reload_data = true
      this.onCloseModal(null, true);
    },
    onCloseModal(e, reload_data = false) {
      this.selected_evento_deportivo = mb.instance("Evento_deportivo");
      this.show_modal_form = false;
      // Si reload_data es true, recargamos la tabla
      reload_data ? this.$refs.evento_deportivo_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.evento_deportivo_table.selectedRowKeys.length === 0) {
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
                .statics("Evento_deportivo")
                .delete_by_ids(_this.$refs.evento_deportivo_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.evento_deportivo_table.selectedRowKeys = [];
            _this.$refs.evento_deportivo_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.evento_deportivo_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "evento_deportivo_list.css";
</style>