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
      atleta_estado: {
        estado_atleta: {
        },
      },
    }
    export const feedbacks = {
      atleta_estado: {
      id_estado: {
        isUnique: 'This id_estado has been taken' 

      },
      },
    }
