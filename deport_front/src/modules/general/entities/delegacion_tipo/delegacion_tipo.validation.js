import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal
  } from 'vuelidate/lib/validators';
import * as mb from "@/helpers/loaders/model.load"
import { alphaOnly } from '@/validators/customValidators';

    export const validations = {
      delegacion_tipo: {
        tipo_delegacion: {
          required,
          alphaOnly
        },
      },
    }
    export const feedbacks = {
      delegacion_tipo: {
        tipo_delegacion:{
         required: 'Este campo es obligatorio',
         alphaOnly: 'Solo se permiten letras y espacios'
         }
      },
    }
