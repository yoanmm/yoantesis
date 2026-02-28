import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal
  } from 'vuelidate/lib/validators';
import * as mb from "@/helpers/loaders/model.load"

    export const validations = {
      evento_deportivo: {
        nombre_evento: {
          required
        },
        descripcion_evento: {
        },
        logo: {
        },
        fecha_inicio: {
          required
        },
        fecha_fin: {
          required
        },
        curso: {
        },
        edicion_evento: {
        },
        terminado: {
          integer,
        },
        resultado_edicion: {
          maxLength: maxLength(65535),
        },
        descripcion_delegaciones: {
        },
        id_regla_evento: {
          integer,
        },
        reglamento: {
        },
      },
    }
    export const feedbacks = {
      evento_deportivo: {
      id_evento: {
        isUnique: 'This id_evento has been taken' 

      },
      },
    }
