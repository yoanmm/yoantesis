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
      reclamacion_estado: {
        nombre_estado: {
          required,
          alphaOnly
        },
      },
    }
    export const feedbacks = {
      reclamacion_estado: {
      id_estado: {
        isUnique: 'This id_estado has been taken' 

      },
      },
    }
