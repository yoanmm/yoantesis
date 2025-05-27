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
      delegacion_regla: {
        nombre_regla: {
        },
        regla: {
          maxLength: maxLength(65535),
        },
      },
    }
    export const feedbacks = {
      delegacion_regla: {
      id_regla_delegacion: {
        isUnique: 'This id_regla_delegacion has been taken' 

      },
      },
    }
