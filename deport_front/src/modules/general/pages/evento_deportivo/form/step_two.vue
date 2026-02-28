<template>
  <div>
    <deporte_table
        v-model="selectedRowKeys"
        :columns="columns"
        table_name="Deporte"
        id_table="id_deporte"
        ref="deporte_table"
        :params_search="params_search"
        :paginate="false"
        :show_export="false"
    >
      <template #individual="{ record }">
        <div style="text-align:center;">
          <template v-if="record === 1">
            <a-icon type="check" style="font-size:15px;color:#52c41a;" />
          </template>
          <template v-else>
            <a-icon type="close" style="font-size:15px;color:#ff4d4f;" />
          </template>
        </div>
      </template>
    </deporte_table>
  </div>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";
import deporte_table from "@/modules/general/pages/deporte/list/deporte.table";

export default {
  name: "StepTwo",
  components: { deporte_table },
  props: {
    model: { type: Object, default: () => ({}) },
  },
  data() {
    return {
      mb,
      columns: mb
          .statics("Deporte")
          .columns.filter((c) => ["nombre_deporte", "genero", "individual"].includes(c.dataIndex || c.key)),
      params_search: { relations: ["categoria", "deporte_padre", "regla"] },
      selectedRowKeys: [],
      isInitialized: false // Flag para asegurar que la carga inicial ocurra solo una vez
    };
  },
  methods: {
    async loadData() {
      if (this.$refs.deporte_table) {
        await this.$refs.deporte_table.load_data();
        await this.syncSelection();
      }
    },

    async syncSelection() {
      // Si el modelo tiene un ID de evento, significa que estamos EDITANDO
      if (this.model && this.model.id_evento !== undefined) {
        try {
          // Buscamos deportes que ya tienen el valor activo = 1 en BD
          const param = { attr: { activo: 1 } };
          const deportes = await mb.statics("Deporte").list(param);
          let ids = deportes.data.map(item => item.id_deporte);
          this.selectedRowKeys = [...ids];
        } catch (error) {
          console.error("Error al sincronizar selección:", error);
        }
      } else {
        // Si no hay ID de evento, es una CREACIÓN: deben estar todos desmarcados
        this.selectedRowKeys = [];
      }
      this.isInitialized = true;
    },

    getData() {
      // Recoge los que quedaron marcados al final al enviar el formulario
      return this.selectedRowKeys;
    },

    resetTable() {
      this.selectedRowKeys = [];
      if (this.$refs.deporte_table) {
        this.$refs.deporte_table.load_data();
      }
    },

    validate() {
      if (this.selectedRowKeys.length === 0) {
        this.$notification?.error?.({
          message: "Selección requerida",
          description: "Debes seleccionar al menos un deporte para continuar.",
        });
        return false;
      }
      return true;
    },
  },

  watch: {
    // Vigilamos específicamente el ID del evento para disparar la carga inicial
    'model.id_evento': {
      handler(newVal) {
        if (!this.isInitialized) {
          this.syncSelection();
        }
      },
      immediate: true
    }
  },

  mounted() {
    this.loadData();
  }
};
</script>