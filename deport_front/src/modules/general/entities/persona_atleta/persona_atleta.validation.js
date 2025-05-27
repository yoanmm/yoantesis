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
      persona_atleta: {
        id_persona: {
          integer,
        },
        id_tipo: {
          integer,
        },
        foto: {
        },
        tamaño: {
          decimal,
        },
        peso: {
          decimal,
        },
        facultad: {
        },
      },
    }
    export const feedbacks = {
      persona_atleta: {
      id_atleta: {
        isUnique: 'This id_atleta has been taken' 

      },
      },
    }
