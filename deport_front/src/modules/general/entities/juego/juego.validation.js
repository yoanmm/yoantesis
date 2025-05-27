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
      juego: {
        fecha_inicio: {
        },
        fecha_fin: {
        },
        descripcion_juego: {
        },
        id_competencia: {
          integer,
        },
        id_fase: {
          integer,
        },
        id_cancha: {
          integer,
        },
      },
    }
    export const feedbacks = {
      juego: {
      id_juego: {
        isUnique: 'This id_juego has been taken' 

      },
      },
    }
