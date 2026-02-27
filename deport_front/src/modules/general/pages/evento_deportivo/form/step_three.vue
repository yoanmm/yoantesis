<template>
  <div>
    <delegacion_table
      :columns="columns"
      table_name="Delegacion"
      id_table="id_delegacion"
      ref="delegacion_table"
      :params_search="params_search"
      :paginate="false"
      :rowSelection="{ selectedRowKeys: selectedRowKeys, onChange: onSelectChange }"
      :show_export="false"
    />
  </div>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";
import delegacion_table from "@/modules/general/pages/delegacion/list/delegacion.table";

export default {
  name: "StepThree",
  components: { delegacion_table },
  props: {
    model: { type: Object, default: () => ({}) },
  },
  data() {
    return {
      mb,
      columns: mb
        .statics("Delegacion")
        .columns.filter((c) => c.dataIndex === "nombre_delegacion" || c.key === "nombre_delegacion"),
      params_search: { relations: ["tipo_delegacion", "regla_delegacion"] },
      selectedRowKeys: [],
    };
  },
  mounted() {
    this.loadData();
  },
  methods: {
    loadData() {
      if (this.$refs.delegacion_table) {
        this.$refs.delegacion_table.load_data();
      }
      if (this.model && this.model.delegaciones) {
        this.selectedRowKeys = this.model.delegaciones.map((d) => d.id_delegacion || d);
      }
    },

    onSelectChange(selectedRowKeys) {
      this.selectedRowKeys = selectedRowKeys;
    },

    getData() {
      // PLAN A
      if (this.selectedRowKeys && this.selectedRowKeys.length > 0) {
        return this.selectedRowKeys;
      }
      // PLAN B
      if (this.$refs.delegacion_table && this.$refs.delegacion_table.selectedRowKeys) {
        return this.$refs.delegacion_table.selectedRowKeys;
      }
      return [];
    },

    resetTable() {
      this.selectedRowKeys = [];
      if (this.$refs.delegacion_table) {
        this.$refs.delegacion_table.selectedRowKeys = [];
        this.$refs.delegacion_table.load_data();
      }
    },
    validate() {
      const selected = this.getData();
      if (!selected || selected.length === 0) {
        this.$notification?.error?.({
          message: "Selección requerida",
          description: "Debes seleccionar al menos un participante para continuar.",
        });
        return false;
      }
      return true;
    },
  },
  watch: {
    model: {
      handler(val) {
        if (val && val.delegaciones) {
          this.selectedRowKeys = val.delegaciones.map((d) => d.id_delegacion || d);
        }
      },
      deep: true,
    },
  },
};
</script>
