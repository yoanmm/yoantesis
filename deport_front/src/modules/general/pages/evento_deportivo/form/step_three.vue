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
      // Mostrar sólo el nombre de la delegación en el wizard
      columns: mb.statics("Delegacion").columns.filter(c => {
        const key = c.dataIndex || c.key || '';
        return key === 'nombre_delegacion';
      }),
      params_search: { relations: ["tipo_delegacion", "regla_delegacion"] },
      paginate: false,
      mb,
    };
  },
  methods: {
    loadTableData() {
      this.$refs.delegacion_table.load_data();
    },
    getData() {
      return this.$refs.delegacion_table ? this.$refs.delegacion_table.selectedRowKeys : [];
    },
    resetTable() {
      if (this.$refs.delegacion_table) {
        this.$refs.delegacion_table.selectedRowKeys = [];
        this.$refs.delegacion_table.load_data();
      }
    },
  },
  mounted() {
    this.loadTableData();
  },
};
</script>
