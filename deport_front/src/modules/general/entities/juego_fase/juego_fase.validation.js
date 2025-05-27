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
      juego_fase: {
        nombre_fase: {
        },
        es_final: {
          integer,
        },
      },
    }
    export const feedbacks = {
      juego_fase: {
      id_fase: {
        isUnique: 'This id_fase has been taken' 

      },
      },
    }
