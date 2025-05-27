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
      evento_deportivo_regla: {
        nombre_regla: {
        },
        regla: {
          maxLength: maxLength(65535),
        },
      },
    }
    export const feedbacks = {
      evento_deportivo_regla: {
      id_regla_evento: {
        isUnique: 'This id_regla_evento has been taken' 

      },
      },
    }
