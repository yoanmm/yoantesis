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
      rol_permiso: {
        id_rol: {
          integer,
        },
        id_permiso: {
          integer,
        },
      },
    }
    export const feedbacks = {
      rol_permiso: {
      id_rol_permiso: {
        isUnique: 'This id_rol_permiso has been taken' 

      },
      },
    }
