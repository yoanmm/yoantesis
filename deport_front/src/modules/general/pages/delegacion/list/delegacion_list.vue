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
          <span>Delegaciones</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class="row col-md-6">
      <h3>Delegaciones</h3>
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
        :title="selected_delegacion.get_id() ? 'Actualizar delegación' : 'Añadir delegación'"
        class="modal-form"
        width="55rem"
        :visible="show_modal_form"
        :destroyOnClose="true"
        on-ok="handleOk"
        :header="null"
        :footer="null"
        :maskClosable="false"
      >
        <delegacion_form :modal="true" :model="selected_delegacion" />
      </a-modal>
      <div style="margin-left: 15px">
       
        <delegacion_table
  :columns="columns"
  table_name="Delegacion"
  id_table="id_delegacion"
  ref="delegacion_table"
  :params_search="params_search"
  :paginate="paginate"
>
<!-- SLOT PARA LA COLUMNA REGLAMENTO -->
<template #reglamento="{ record }">
  <div style="text-align:center;">
    <a
      href="#"
      @click.prevent="downloadReglamento(record)"
      style="display:flex;flex-direction:column;align-items:center;justify-content:center;"
    >
      <a-icon type="download" style="font-size:22px;color:#1890ff;" />
      <div style="font-size:11px;color:#666;">Descargar</div>
    </a>
  </div>
</template>
 <!-- Color -->
<template v-slot:color="{ record }">
  <div
    :title="record"
    :style="{
      width: '22px',
      height: '18px',
      borderRadius: '3px',
      margin: 'auto',
      border: '1px solid #ccc',
      backgroundColor: record
    }"
  ></div>
</template>

<!-- Mascota -->
<template v-slot:mascota="{ record }">
  <div style="text-align:center;">
    <img
      v-if="record"
      :src="record"
      alt="Mascota"
      style="width:60px;height:60px;object-fit:cover;border-radius:4px;"
    />
    <div v-else>
      <a-icon type="picture" style="font-size:20px;color:#1890ff;" />
      <div style="font-size:10px;color:#666;">Sin imagen</div>
    </div>
  </div>
</template>

<!-- Logo -->
<template v-slot:logo="{ record }">
  <div style="text-align:center;">
    <img
      v-if="record"
      :src="record"
      alt="Logo"
      style="width:60px;height:60px;object-fit:cover;border-radius:4px;"
    />
    <div v-else>
      <a-icon type="picture" style="font-size:20px;color:#1890ff;" />
      <div style="font-size:10px;color:#666;">Sin imagen</div>
    </div>
  </div>
</template>

</delegacion_table>


      </div>
    </div>
  </div>
</template>
<script>
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import delegacion_form from "../form/delegacion_form";
import delegacion_table from "./delegacion.table";

export default {
  name: "delegacion_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
      load_data: () => {
        this.$refs.delegacion_table.load_data();
      },
      setSelectedDelegacion: this.setSelectedDelegacion,
    };
  },
  async downloadReglamento(payload) {
    try {
      if (!payload) {
        utils.openNotificationWithIcon('error','Reglamento','No hay reglamento disponible');
        return;
      }
      let url = null;
      if (typeof payload === 'string') url = payload;
      else if (payload.reglamento) url = payload.reglamento;
      else if (payload.record && payload.record.reglamento) url = payload.record.reglamento;
      else if (payload.text) url = payload.text;

      if (!url) {
        utils.openNotificationWithIcon('error','Reglamento','No hay reglamento disponible');
        return;
      }

      const response = await fetch(url);
      if (!response.ok) throw new Error('Network response was not ok');
      const blob = await response.blob();
      let filename = 'reglamento';
      if (response.headers && response.headers.get('Content-Disposition')) {
        const match = response.headers.get('Content-Disposition').match(/filename="(.+)"/);
        if (match) filename = match[1];
      }
      const link = document.createElement('a');
      link.href = window.URL.createObjectURL(blob);
      link.download = filename;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    } catch (e) {
      utils.openNotificationWithIcon('error','Reglamento','No se pudo descargar el archivo');
    }
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Delegacion").columns,
      selected_delegacion: mb.instance("Delegacion"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: ["tipo_delegacion", "regla_delegacion"] },
      mb,
    };
  },
  components: {
    delegacion_form,
    delegacion_table,
  },
  methods: {
    setSelectedDelegacion(model) {
      this.selected_delegacion = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_delegacion = mb.instance("Delegacion");
      this.show_modal_form = false;
      reload_data ? this.$refs.delegacion_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.delegacion_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics("Delegacion").delete_by_ids(_this.$refs.delegacion_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.delegacion_table.selectedRowKeys = [];
            _this.$refs.delegacion_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.delegacion_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "delegacion_list.css";
</style>
