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
      usuario_rol: {
        id_usuario: {
          integer,
        },
        id_rol: {
          integer,
        },
      },
    }
    export const feedbacks = {
      usuario_rol: {
      id_user_rol: {
        isUnique: 'This id_user_rol has been taken' 

      },
      },
    }
