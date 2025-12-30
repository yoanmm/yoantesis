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
      columns: mb.statics("Deporte").columns,
      params_search: { relations: ["categoria", "deporte_padre", "regla"] },
      paginate: false,
      mb,
    };
  },
  methods: {
    loadTableData() {
      this.$refs.deporte_table.load_data();
    },
  },
  mounted() {
    this.loadTableData();
  },
};
</script>
