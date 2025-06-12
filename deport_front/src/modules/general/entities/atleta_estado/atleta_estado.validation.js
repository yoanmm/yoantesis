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
      atleta_estado: {
        estado_atleta: {
          required,
          alphaOnly
        },
      },
    }
    export const feedbacks = {
      atleta_estado: {
      estado_atleta: {
        required: 'Este campo es obligatorio',
        alphaOnly: 'Solo se permiten letras y espacios'
        },
      },
    }
