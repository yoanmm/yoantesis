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
      persona_arbitro: {
        id_persona: {
          integer,
        },
        id_deporte: {
          integer,
        },
      },
    }
    export const feedbacks = {
      persona_arbitro: {
      id_supervisor: {
        isUnique: 'This id_supervisor has been taken' 

      },
      },
    }
