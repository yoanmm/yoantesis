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
        },
        max_atleta: {
          integer,
        },
        min_atleta: {
          integer,
        },
        icono_deporte: {
        },
        genero: {
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
      },
    }
    export const feedbacks = {
      deporte: {
      id_deporte: {
        isUnique: 'This id_deporte has been taken' 

      },
      },
    }
