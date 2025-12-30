import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal
} from 'vuelidate/lib/validators';
import * as mb from "@/helpers/loaders/model.load";
import { validateIdCard } from '@/helpers/helpers/utils.js';
import { alphaOnly } from '@/validators/customValidators';

export const validations = {
  persona: {
    nombre: {
      required,
      alphaOnly
    },
    apellido: {
      required,
      alphaOnly
    },
    carnet: {
      required,
      validateIdCard
    },
    genero: {
      required,
    },
    facultad: {
      required
    }
  },
}

export const feedbacks = {
  persona: {
    nombre: {
      required: 'Este campo es obligatorio',
      alphaOnly: 'Solo se permiten letras y espacios'
    },
    apellido: {
      required: 'Este campo es obligatorio',
      alphaOnly: 'Solo se permiten letras y espacios'
    },
    carnet: {
      required: 'Este campo es obligatorio',
      validateIdCard: 'Formato del carnet incorrecto'
    },
    genero: {
      required: 'Este campo es obligatorio',
    },
    facultad: {
      required: 'Este campo es obligatorio',
    },
  },
}
