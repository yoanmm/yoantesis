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
      deporte_categoria_puntuacion: {
        nombre_categoria: {
        },
        puntos: {
        },
      },
    }
    export const feedbacks = {
      deporte_categoria_puntuacion: {
      id_categoria: {
        isUnique: 'This id_categoria has been taken' 

      },
      },
    }
