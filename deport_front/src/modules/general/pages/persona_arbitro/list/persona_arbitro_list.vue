<template>
  <div>
    <div class="row row-breadcrumb">
      <a-breadcrumb>
        <a-breadcrumb-item href="">
          <a-icon type="home" />
          <router-link :to="{ name: 'index' }">Inicio</router-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item href="">
          <span>Gestión deportiva</span>
        </a-breadcrumb-item>
        <a-breadcrumb-item>
          <span>Árbitros</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class=" row col-md-6">
      <h3>Árbitros</h3>
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
        :title="selected_persona_arbitro.get_id() ? 'Actualizar arbitro' : 'Añadir arbitro'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <persona_arbitro_form :modal="true" :model="selected_persona_arbitro" />
      </a-modal>
      <div style="margin-left: 15px">
        <persona_arbitro_table
          :columns="columns"
          table_name="Persona_arbitro"
          id_table="id_supervisor"
          ref="persona_arbitro_table"
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
import persona_arbitro_form from "../form/persona_arbitro_form";
import persona_arbitro_table from "./persona_arbitro.table";

export default {
  name: "persona_arbitro_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.persona_arbitro_table.load_data();
      },
      setSelectedPersona_arbitro: this.setSelectedPersona_arbitro,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Persona_arbitro").columns,
      selected_persona_arbitro: mb.instance("Persona_arbitro"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["persona", "deporte"] },
      mb,
    };
  },
  components: {
    persona_arbitro_form,
    persona_arbitro_table,
  },
  methods: {
    setSelectedPersona_arbitro(model) {
      this.selected_persona_arbitro = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_persona_arbitro = mb.instance("Persona_arbitro");
      this.show_modal_form = false;
      reload_data ? this.$refs.persona_arbitro_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.persona_arbitro_table.selectedRowKeys.length === 0) {
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
              .statics("Persona_arbitro")
              .delete_by_ids(_this.$refs.persona_arbitro_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.persona_arbitro_table.selectedRowKeys = [];
            _this.$refs.persona_arbitro_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.persona_arbitro_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "persona_arbitro_list.css";
</style>
