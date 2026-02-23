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
          <span>Personas</span>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </div>
    <div class="row col-md-6">
      <h3>Personas</h3>
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
              <a-tooltip placement="topLeft" title="Importar desde JSON">
                <a-button icon="upload" type="dashed" @click="triggerFileInput">Importar JSON</a-button>
                <input ref="fileInput" type="file" accept="application/json" style="display:none" @change="handleFileChange" />
              </a-tooltip>
            </a-button-group>
          </div>
        </div>
        <a-modal
          v-model="show_modal_form"
          :header="null"
          :footer="null"
          :maskClosable="false"
        >
          <persona_form :modal="true" :model="selected_persona" />
        </a-modal>
        <div style="margin-left: 15px">
          <persona_table
            :columns="columns"
            table_name="Persona"
            id_table="id_persona"
            ref="persona_table"
            :params_search="params_search"
            :paginate="paginate"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
          import Persona from '@/modules/general/entities/persona/persona.model';
import * as utils from "@/helpers/helpers/utils";
import * as mb from "@/helpers/loaders/model.load";
import persona_form from "../form/persona_form";
import persona_table from "./persona.table";

export default {
  name: "persona_list",
  provide: function() {
    return {
      close_modal: this.onCloseModal,
      show_form: this.show_form,
       load_data: () => {
         this.$refs.persona_table.load_data();
       },
      setSelectedPersona: this.setSelectedPersona,
    };
  },
  data() {
    return {
      data: [],
      self: null,
      columns: mb.statics("Persona").columns,
      selected_persona: mb.instance("Persona"),
      show_modal_form: false,
      paginate: false,
      params_search: { relations: [] },
      mb,
    };
  },
  components: {
    persona_form,
    persona_table,
  },
  methods: {
              triggerFileInput() {
                this.$refs.fileInput.click();
              },
              async handleFileChange(event) {
                const file = event.target.files[0];
                if (!file) return;
                try {
                  const text = await file.text();
                  const personas = JSON.parse(text);
                  if (!Array.isArray(personas)) throw new Error('El archivo no contiene un array');
                  let exitos = 0, fallos = 0;
                  for (const p of personas) {
                    try {
                      const persona = new Persona(p);
                      await persona.save();
                      exitos++;
                    } catch (e) {
                      fallos++;
                    }
                  }
                  utils.openNotificationWithIcon(
                    fallos === 0 ? 'success' : 'warning',
                    'Importación finalizada',
                    `Éxitos: ${exitos}, Fallos: ${fallos}`
                  );
                  this.$refs.persona_table.load_data();
                } catch (error) {
                  utils.openNotificationWithIcon('error', 'Error al importar', error.message);
                }
              },
    setSelectedPersona(model) {
      this.selected_persona = model;
    },
    onCloseModal(e, reload_data = false) {
      this.selected_persona = mb.instance("Persona");
      this.show_modal_form = false;
      reload_data ? this.$refs.persona_table.load_data() : "";
    },
    show_form() {
      this.show_modal_form = !this.show_modal_form;
    },
    showDeleteConfirm() {
      if (this.$refs.persona_table.selectedRowKeys.length === 0) {
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
            const response = await mb.statics("Persona").delete_by_ids(_this.$refs.persona_table.selectedRowKeys);
            utils.process_response(response, "deleted");
            _this.$refs.persona_table.selectedRowKeys = [];
            _this.$refs.persona_table.load_data();
          } catch (error) {
            utils.process_error(error);
            _this.$refs.persona_table.selectedRowKeys = [];
          }
        },
        onCancel() {},
      });
    },
  },
};
</script>

<style>
@import "persona_list.css";
</style>
