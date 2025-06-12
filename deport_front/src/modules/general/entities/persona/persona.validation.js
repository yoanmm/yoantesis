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
      persona: {
        nombre: {
        },
        apellido: {
        },
        carnet: {
        },
        genero: {
        },
        facultad: {
        }
      },
    }
    export const feedbacks = {
      persona: {
      id_persona: {
        isUnique: 'This id_persona has been taken' 

      },
      },
    }
