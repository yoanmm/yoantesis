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
      deporte_regla: {
        id_regla_deporte: {
          required,
          integer,
        },
        nombre_regla: {
        },
        campos: {
          maxLength: maxLength(65535),
        },
        cal_campos: {
          maxLength: maxLength(65535),
        },
      },
    }
    export const feedbacks = {
      deporte_regla: {
      id_regla_deporte: {
        isUnique: 'This id_regla_deporte has been taken' 

      },
      },
    }
