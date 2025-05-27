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
      permisos: {
        nombre_permiso: {
        },
        code: {
        },
        modulo: {
        },
        controller: {
        },
        accion: {
        },
        habilitado: {
          integer,
        },
      },
    }
    export const feedbacks = {
      permisos: {
      id_permiso: {
        isUnique: 'This id_permiso has been taken' 

      },
      },
    }
