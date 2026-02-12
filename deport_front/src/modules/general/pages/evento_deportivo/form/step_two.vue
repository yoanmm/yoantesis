<template>
  <div>
    <deporte_table
        :columns="columns"
        table_name="Deporte"
        id_table="id_deporte"
        ref="deporte_table"
        :params_search="params_search"
        :paginate="false"
        :rowSelection="{ selectedRowKeys: selectedRowKeys, onChange: onSelectChange }"
    />
  </div>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";
import deporte_table from "@/modules/general/pages/deporte/list/deporte.table";

export default {
  name: "StepTwo",
  components: { deporte_table },
  props: {
    model: { type: Object, default: () => ({}) }
  },
  data() {
    return {
      mb,
      columns: mb.statics("Deporte").columns.filter(c =>
          ['nombre_deporte', 'genero', 'individual'].includes(c.dataIndex || c.key)
      ),
      params_search: { relations: ["categoria", "deporte_padre", "regla"] },
      selectedRowKeys: [],
    };
  },
  mounted() {
    this.loadData();
  },
  methods: {
    loadData() {
      if (this.$refs.deporte_table) {
        this.$refs.deporte_table.load_data();
      }
      if (this.model && this.model.deportes) {
        this.selectedRowKeys = this.model.deportes.map(d => d.id_deporte || d);
      }
    },

    onSelectChange(selectedRowKeys) {
      this.selectedRowKeys = selectedRowKeys;
    },

    getData() {
      // PLAN A: Usar lo que capturamos con el evento
      if (this.selectedRowKeys && this.selectedRowKeys.length > 0) {
        return this.selectedRowKeys;
      }

      // PLAN B: Intentar leer directamente de la tabla (por si el evento falló)
      if (this.$refs.deporte_table && this.$refs.deporte_table.selectedRowKeys) {
        return this.$refs.deporte_table.selectedRowKeys;
      }

      return [];
    },

    resetTable() {
      this.selectedRowKeys = [];
      if (this.$refs.deporte_table) {
        this.$refs.deporte_table.selectedRowKeys = []; // Reset visual forzado
        this.$refs.deporte_table.load_data();
      }
    }
  },
  watch: {
    model: {
      handler(val) {
        if (val && val.deportes) {
          this.selectedRowKeys = val.deportes.map(d => d.id_deporte || d);
        }
      },
      deep: true
    }
  }
};
</script>