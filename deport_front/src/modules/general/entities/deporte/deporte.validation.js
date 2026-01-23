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
      deporte: {
        nombre_deporte: {
          required,
        },
        max_atleta: {
          integer,
          required
        },
        min_atleta: {
          integer,
          required
        },
        icono_deporte: {
        },
        genero: {
          required
        },
        individual: {
          integer,
        },
        id_categoria: {
          integer,
        },
        id_regla: {
          integer,
        },
        id_deporte_padre: {
          integer,
        },
        reglamento: {
        },
        activo: {
        },
      },
    }
    export const feedbacks = {
      deporte: {
      id_deporte: {
        isUnique: 'This id_deporte has been taken' 

      },
      },
    }
