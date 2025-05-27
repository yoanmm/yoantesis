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
      equipo_estado: {
        id_estado: {
          required,
          integer,
        },
        estado_equipo: {
        },
      },
    }
    export const feedbacks = {
      equipo_estado: {
      id_estado: {
        isUnique: 'This id_estado has been taken' 

      },
      },
    }
