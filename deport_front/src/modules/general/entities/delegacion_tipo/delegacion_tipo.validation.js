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
      delegacion_tipo: {
        tipo_delegacion: {
        },
      },
    }
    export const feedbacks = {
      delegacion_tipo: {
      id_tipo_delegacion: {
        isUnique: 'This id_tipo_delegacion has been taken' 

      },
      },
    }
