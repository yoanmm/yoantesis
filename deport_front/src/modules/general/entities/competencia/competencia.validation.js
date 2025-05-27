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
        },
        id_deporte: {
          integer,
        },
        id_supervisor: {
          integer,
        },
        resultado_competencia: {
          maxLength: maxLength(65535),
        },
        terminado: {
          integer,
        },
        fin_inscripcion: {
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
