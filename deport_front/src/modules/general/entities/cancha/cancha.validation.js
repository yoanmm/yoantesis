import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal,
  } from 'vuelidate/lib/validators';
import * as mb from "@/helpers/loaders/model.load"
import { noSpecialChars } from '@/validators/customValidators';

    export const validations = {
      cancha: {
        nombre_cancha: {
          required,
          noSpecialChars
        },
      },
    }
    export const feedbacks = {
      cancha: {
      nombre_cancha: {
         required: 'Este campo es obligatorio',
         noSpecialChars: 'Solo se permiten letras y espacios'
         }
      },
    }
