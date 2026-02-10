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
      delegacion_evento: {
        id_evento: {
          integer,
        },
        id_delegacion: {
          integer,
        },
      },
    }
    export const feedbacks = {
      delegacion_evento: {
      id_delegacion_evento: {
        isUnique: 'This id_delegacion_evento has been taken' 

      },
      },
    }
