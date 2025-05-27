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
      usuarios: {
        username: {
        },
        password: {
        },
        correo: {
        },
        creado: {
        },
        actualizado: {
        },
        activo: {
          integer,
        },
        id_persona: {
          integer,
        },
      },
    }
    export const feedbacks = {
      usuarios: {
      id_usuario: {
        isUnique: 'This id_usuario has been taken' 

      },
      },
    }
