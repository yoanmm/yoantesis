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

    <tc-form-item class="form-group mb-0 col-md-6 px-3">
      <label>Regla</label>
      <tc-autocomplete
        placeholder="Seleccione la regla"
        name="id_regla_evento"
        ref="select_regla_evento"
        idKey="id_regla_evento"
        textKey="nombre_regla"
        :successFeed="false"
        :defaultValue="evento_deportivo.id_regla_evento"
        v-model="evento_deportivo.id_regla_evento"
        :url="mb.statics('Evento_deportivo_regla').select_2_url"
      />
    </tc-form-item>
  </tc-form>
</template>

<script>
import * as mb from "@/helpers/loaders/model.load";

export default {
  name: "StepOne",
  validations: mb.statics("Evento_deportivo").validations,
  data() {
    return {
      mb,
      evento_deportivo: mb.instance("Evento_deportivo"),
    };
  },
};
</script>
