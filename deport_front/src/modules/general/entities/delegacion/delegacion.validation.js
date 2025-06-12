import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal,
    alpha
  } from 'vuelidate/lib/validators';
import * as mb from "@/helpers/loaders/model.load"
import { alphaOnly } from '@/validators/customValidators';

    export const validations = {
      delegacion: {
        nombre_delegacion: {
          required,
          alphaOnly
        },
        abreviatura: {
          alpha
        },
        mascota: {
        },
        color: {
        },
        logo: {
        },
        id_tipo_delegacion: {
          integer,
          required
        },
        id_regla_delegacion: {
          integer,
        },
      },
    }
    export const feedbacks = {
      delegacion: {
      id_delegacion: {
        isUnique: 'This id_delegacion has been taken' 

      },
      },
    }
