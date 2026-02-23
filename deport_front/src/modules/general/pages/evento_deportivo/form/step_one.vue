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
      <tc-input placeholder="Nombre" name="nombre_evento" v-model="evento_deportivo.nombre_evento" />
    </tc-form-item>

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Descripción</label>
      <tc-input placeholder="Descripción" name="descripcion_evento" v-model="evento_deportivo.descripcion_evento" />
    </tc-form-item>

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Fecha inicio</label>
      <tc-date-picker name="fecha_inicio" v-model="evento_deportivo.fecha_inicio" />
    </tc-form-item>

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Fecha fin</label>
      <tc-date-picker
        name="fecha_fin"
        v-model="evento_deportivo.fecha_fin"
        :disabled-date="disabledEndDate"
      />
    </tc-form-item>

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Curso</label>
      <tc-input placeholder="2020-2021" name="curso" v-model="evento_deportivo.curso" />
    </tc-form-item>

<!--    <tc-form-item class="form-group mb-0 col-md-6 px-3">-->
<!--      <label>Terminado</label>-->
<!--      <div style="margin-top: 5px;">-->
<!--        <a-switch v-model="evento_deportivo.terminado" checked-children="Sí" un-checked-children="No" />-->
<!--      </div>-->
<!--    </tc-form-item>-->

<!--    <tc-form-item class="form-group mb-0 col-md-6 px-3">-->
<!--      <label>Activo</label>-->
<!--      <div style="margin-top: 5px;">-->
<!--        <a-switch v-model="evento_deportivo.activo" checked-children="Sí" un-checked-children="No" />-->
<!--      </div>-->
<!--    </tc-form-item>-->

    <tc-form-item class="form-group mb-0 col-md-12 px-3">
      <label>Reglamento (Archivo)</label>
      <input
          type="file"
          accept=".pdf,.doc,.docx,.png,.jpg"
          @change="handleFileUpload"
          class="form-control"
      />
    </tc-form-item>
  </tc-form>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";
import moment from "moment";

export default {
  name: "StepOne",
  props: {
    model: { type: Object, default: () => ({}) },
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
      // Asegurar que los switchers lean booleanos
      this.evento_deportivo.terminado = !!this.evento_deportivo.terminado;
      this.evento_deportivo.activo = !!this.evento_deportivo.activo;
    }
  },
  methods: {
    // Deshabilita fechas de fin menores que la de inicio
    disabledEndDate(date) {
      if (!this.evento_deportivo.fecha_inicio) return false;
      const inicio = moment(this.evento_deportivo.fecha_inicio).startOf('day');
      return moment(date).isBefore(inicio, 'day');
    },
    handleFileUpload(event) {
      if (event.target.files && event.target.files[0]) {
        this.evento_deportivo.reglamento = event.target.files[0];
      }
    },

    // Método para limpiar datos y convertir tipos antes de guardar
    getData() {
      const e = this.evento_deportivo;

      const formatDate = (date) => {
        if (!date) return null;
        if (moment.isMoment(date)) return date.format('YYYY-MM-DD');
        return date;
      };

      // Aquí ocurre la MAGIA: Convertimos true/false a 1/0
      return {
        ...e,
        fecha_inicio: formatDate(e.fecha_inicio),
        fecha_fin: formatDate(e.fecha_fin),
        // Conversión estricta a entero para la BD
        terminado: e.terminado ? 1 : 0,
        activo: e.activo ? 1 : 0,
        id_evento: e.id_evento || undefined
      };
    },

    getFormData() {
      const data = this.getData();
      let hasFile = false;

      // Detectar si realmente hay un archivo nuevo
      if (data.reglamento instanceof File) {
        hasFile = true;
      }

      // Si NO hay archivo, devolvemos null para que el padre use JSON (más seguro)
      if (!hasFile) return null;

      // Si HAY archivo, construimos el FormData con cuidado
      const fd = new FormData();
      Object.keys(data).forEach((key) => {
        const value = data[key];

        if (value === null || value === undefined) {
          // No enviar nulos
        } else if (value instanceof File) {
          fd.append(key, value);
        } else {
          // Todo lo demás se envía tal cual (ya convertimos booleanos a 1/0 en getData)
          fd.append(key, value);
        }
      });
      return fd;
    },

    reset() {
      this.evento_deportivo = mb.instance("Evento_deportivo");
    }
  }
};
</script>