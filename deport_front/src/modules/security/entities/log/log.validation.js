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
      log: {
        id: {
          required,
          integer,
        },
        nombre_accion: {
        },
        tabla: {
        },
        record: {
        },
        ip: {
        },
        creado: {
        },
        actualizado: {
        },
        id_usuario: {
          integer,
        },
      },
    }
    export const feedbacks = {
      log: {
      id: {
        isUnique: 'This id has been taken' 

      },
      },
    }
