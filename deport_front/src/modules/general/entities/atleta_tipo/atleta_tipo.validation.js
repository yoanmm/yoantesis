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
      atleta_tipo: {
        tipo_atleta: {
        },
      },
    }
    export const feedbacks = {
      atleta_tipo: {
      id_tipo: {
        isUnique: 'This id_tipo has been taken' 

      },
      },
    }
