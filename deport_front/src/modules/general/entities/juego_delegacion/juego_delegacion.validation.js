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
      juego_delegacion: {
        id_juego: {
          integer,
        },
        id_delegacion: {
          integer,
        },
        resultados: {
          maxLength: maxLength(65535),
        },
      },
    }
    export const feedbacks = {
      juego_delegacion: {
      id_juego_delegacion: {
        isUnique: 'This id_juego_delegacion has been taken' 

      },
      },
    }
