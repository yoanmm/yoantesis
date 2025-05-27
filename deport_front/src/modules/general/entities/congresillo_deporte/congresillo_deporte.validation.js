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
      congresillo_deporte: {
        fecha_congresillo: {
        },
        id_competencia: {
          integer,
        },
      },
    }
    export const feedbacks = {
      congresillo_deporte: {
      id_congresillo: {
        isUnique: 'This id_congresillo has been taken' 

      },
      },
    }
