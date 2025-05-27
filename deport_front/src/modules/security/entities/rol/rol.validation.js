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
      rol: {
        nombre_rol: {
        },
        activo: {
          integer,
        },
        creado: {
        },
        actualizado: {
        },
      },
    }
    export const feedbacks = {
      rol: {
      id_rol: {
        isUnique: 'This id_rol has been taken' 

      },
      },
    }
