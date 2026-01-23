import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal
  } from 'vuelidate/lib/validators';
  import { alphaOnly, alphaMax5 } from '@/validators/customValidators';
import * as mb from "@/helpers/loaders/model.load"

    export const validations = {
      persona_atleta: {
        id_persona: {
          integer,
          required
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
          required,
          alphaOnly
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
