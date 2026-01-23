import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal
  } from 'vuelidate/lib/validators';
  import { alphaOnly, alphaMax5 } from '@/validators/customValidators';
import * as mb from "@/helpers/loaders/model.load"

    export const validations = {
      juego_fase: {
        nombre_fase: {
          required,
          alphaOnly
        },
        es_final: {
          integer,
        },
      },
    }
    export const feedbacks = {
      juego_fase: {
      id_fase: {
        isUnique: 'This id_fase has been taken' 

      },
      },
    }
