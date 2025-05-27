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
        },
        id_delegacion: {
          integer,
        },
        id_congresillo: {
          integer,
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
