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
      competencia: {
        id_evento: {
          integer,
          required,
        },
        id_deporte: {
          integer,
          required,
        },
        resultado_competencia: {
          maxLength: maxLength(65535),
        },
        terminado: {
          integer,
        },
        fin_inscripcion: {
          required,
        },
      },
    }
    export const feedbacks = {
      competencia: {
      id_competencia: {
        isUnique: 'This id_competencia has been taken' 

      },
      },
    }
