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
          required,
        },
        id_competencia: {
          integer,
          required,
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
