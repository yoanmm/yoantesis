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
      congresillo_asistencia: {
        representante: {
          required,
        },
        id_delegacion: {
          integer,
          required,
        },
        id_congresillo: {
          integer,
          required,
        },
      },
    }
    export const feedbacks = {
      congresillo_asistencia: {
      id_asistencia_congresillo: {
        isUnique: 'This id_asistencia_congresillo has been taken' 

      },
      },
    }
