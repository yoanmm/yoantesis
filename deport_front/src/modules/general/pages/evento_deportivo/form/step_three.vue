<template>
  <div>
    <delegacion_table
      :columns="columns"
      table_name="Delegacion"
      id_table="id_delegacion"
      ref="delegacion_table"
      :params_search="params_search"
      :paginate="paginate"
    />
  </div>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";
import delegacion_table from "@/modules/general/pages/delegacion/list/delegacion.table";

export default {
  name: "StepThree",
  components: {
    delegacion_table,
  },
  data() {
    return {
      columns: mb.statics("Delegacion").columns,
      params_search: { relations: ["tipo_delegacion", "regla_delegacion"] },
      paginate: false,
      mb,
    };
  },
  methods: {
    loadTableData() {
      this.$refs.delegacion_table.load_data();
    },
  },
  mounted() {
    this.loadTableData();
  },
};
</script>
