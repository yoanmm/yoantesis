<template>
  <tc-form
    :feedbacks="mb.statics('Evento_deportivo').feedbacks"
    :vobject="$v"
    nested="evento_deportivo"
    ref="form"
    class="form-row"
  >
    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Nombre del evento</label>
      <tc-input
        placeholder="Ingrese el nombre"
        name="nombre_evento"
        v-model="evento_deportivo.nombre_evento"
      ></tc-input>
    </tc-form-item>

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Descripción</label>
      <tc-input
        placeholder="Ingrese la descripción"
        name="descripcion_evento"
        v-model="evento_deportivo.descripcion_evento"
      ></tc-input>
    </tc-form-item>

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Fecha inicio</label>
      <tc-date-picker name="fecha_inicio" v-model="evento_deportivo.fecha_inicio"></tc-date-picker>
    </tc-form-item>

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Fecha fin</label>
      <tc-date-picker name="fecha_fin" v-model="evento_deportivo.fecha_fin"></tc-date-picker>
    </tc-form-item>

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Curso</label>
      <tc-input placeholder="Ej: 2020-2021" name="curso" v-model="evento_deportivo.curso"></tc-input>
    </tc-form-item>

<!--
    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Regla</label>
      <tc-autocomplete
        placeholder="Seleccione la regla"
        name="id_regla_evento"
        ref="select_regla_evento"
        idKey="id_regla_evento"
        textKey="reglamento"
        :successFeed="false"
        :defaultValue="evento_deportivo.id_regla_evento"
        v-model="evento_deportivo.id_regla_evento"
        :url="mb.statics('Evento_deportivo_regla').select_2_url"
      />
    </tc-form-item>
-->
    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Reglamento</label>
      <input
        type="file"
        name="reglamento"
        accept=".pdf,.doc,.docx,.png,.jpg,.jpeg"
        @change="evento_deportivo.reglamento = $event.target.files[0]"
        class="form-control"
      />
    </tc-form-item>

  </tc-form>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";

export default {
  name: "StepOne",
  props: {
    model: {
      type: Object,
      default: () => ({})
    },
    modal: {
      type: Boolean,
      default: false
    }
  },
  validations: mb.statics("Evento_deportivo").validations,
  data() {
    return {
      mb,
      evento_deportivo: mb.instance("Evento_deportivo"),
    };
  },
  mounted() {
    if (this.model && Object.keys(this.model).length) {
      this.evento_deportivo = mb.instance("Evento_deportivo", this.model);
    }
  },
  methods: {
    getData() {
      try {
        const e = this.evento_deportivo || {};
        return {
          id_evento: e.id_evento || undefined,
          nombre_evento: e.nombre_evento || null,
          descripcion_evento: e.descripcion_evento || null,
          logo: e.logo || null,
          fecha_inicio: e.fecha_inicio && e.fecha_inicio.format ? e.fecha_inicio.format('YYYY-MM-DD') : e.fecha_inicio || null,
          fecha_fin: e.fecha_fin && e.fecha_fin.format ? e.fecha_fin.format('YYYY-MM-DD') : e.fecha_fin || null,
          curso: e.curso || null,
          edicion_evento: e.edicion_evento || null,
          terminado: e.terminado != null ? (e.terminado ? 1 : 0) : null,
          resultado_edicion: e.resultado_edicion || null,
          descripcion_delegaciones: e.descripcion_delegaciones || null,
          id_regla_evento: e.id_regla_evento || null,
          reglamento: e.reglamento || null,
          activo: e.activo != null ? (e.activo ? 1 : 0) : null,
        };
      } catch (err) {
        return this.evento_deportivo;
      }
    },
    reset() {
      this.evento_deportivo = mb.instance("Evento_deportivo");
    }
    ,
    /**
     * Devuelve un FormData si contiene archivos, o el objeto plano si no.
     * Útil para que el componente padre lo envíe directamente al backend.
     */
    getFormData() {
      const data = this.getData() || {};
      const fd = new FormData();
      let hasFile = false;
      Object.keys(data).forEach((k) => {
        const v = data[k];
        if (v instanceof File) hasFile = true;
      });

      if (!hasFile) return data;

      Object.keys(data).forEach((k) => {
        const v = data[k];
        if (v === null || v === undefined) {
          fd.append(k, "");
        } else if (v instanceof File) {
          fd.append(k, v, v.name);
        } else {
          fd.append(k, v);
        }
      });
      return fd;
    }
  }
};
</script>
