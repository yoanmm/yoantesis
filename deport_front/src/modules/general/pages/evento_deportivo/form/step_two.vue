<template>
  <div>
    <deporte_table
      :columns="columns"
      table_name="Deporte"
      id_table="id_deporte"
      ref="deporte_table"
      :params_search="params_search"
      :paginate="paginate"
    />
  </div>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";
import deporte_table from "@/modules/general/pages/deporte/list/deporte.table";

export default {
  name: "StepTwo",
  components: {
    deporte_table,
  },
  data() {
    return {
      // Mostrar sólo Nombre, Genero e Individual en el wizard
      columns: mb.statics("Deporte").columns.filter(c => {
        const key = c.dataIndex || c.key || '';
        return ['nombre_deporte', 'genero', 'individual'].includes(key);
      }),
      params_search: { relations: ["categoria", "deporte_padre", "regla"] },
      paginate: false,
      mb,
    };
  },
  methods: {
    loadTableData() {
      this.$refs.deporte_table.load_data();
    },
    getData() {
      return this.$refs.deporte_table ? this.$refs.deporte_table.selectedRowKeys : [];
    },
    resetTable() {
      if (this.$refs.deporte_table) {
        this.$refs.deporte_table.selectedRowKeys = [];
        this.$refs.deporte_table.load_data();
      }
    },
  },
  mounted() {
    this.loadTableData();
  },
};
</script>
