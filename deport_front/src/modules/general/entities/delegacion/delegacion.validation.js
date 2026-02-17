import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal,
    alpha,
  } from 'vuelidate/lib/validators';
import * as mb from "@/helpers/loaders/model.load"
import { alphaOnly, alphaMax5 } from '@/validators/customValidators';

    export const validations = {
      delegacion: {
        nombre_delegacion: {
          required,
          alphaOnly
        },
        abreviatura: {
          alphaMax5
        },
        mascota: {
          required,
        },
        color: {
          required,
        },
        logo: {
          required,
        },
        id_tipo_delegacion: {
          integer,
          required
        },
        id_regla_delegacion: {
          integer,
        },
        reglamento: {
        },
      },
    }
    export const feedbacks = {
      delegacion: {
        id_delegacion: {
          isUnique: 'This id_delegacion has been taken' 
        },
        mascota: {
          acceptedExtensions: 'Solo se aceptan archivos .png, .jpg, .jpeg',
        },
      },
    }
