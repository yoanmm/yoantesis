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
      delegacion: {
        nombre_delegacion: {
        },
        abreviatura: {
        },
        mascota: {
        },
        color: {
        },
        logo: {
        },
        id_tipo_delegacion: {
          integer,
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
