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
      cancha: {
        nombre_cancha: {
        },
      },
    }
    export const feedbacks = {
      cancha: {
      id_cancha: {
        isUnique: 'This id_cancha has been taken' 

      },
      },
    }
