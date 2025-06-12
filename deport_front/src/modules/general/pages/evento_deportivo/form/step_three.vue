<template>
  <div>
    <persona_atleta_table
      :columns="columns"
      table_name="Persona_atleta"
      id_table="id_atleta"
      ref="persona_atleta_table"
      :params_search="params_search"
      :paginate="paginate"
    />
  </div>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";
import persona_atleta_table from "@/modules/general/pages/persona_atleta/list/persona_atleta.table";

export default {
  name: "StepThree",
  components: {
    persona_atleta_table,
  },
  data() {
    return {
      columns: mb.statics("Persona_atleta").columns,
      params_search: { relations: ["persona", "tipo"] },
      paginate: false,
      mb,
    };
  },
  methods: {
    loadTableData() {
      this.$refs.persona_atleta_table.load_data();
    },
  },
  mounted() {
    this.loadTableData();
  },
};
</script>
