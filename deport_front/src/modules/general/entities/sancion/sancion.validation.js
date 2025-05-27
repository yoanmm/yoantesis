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
      sancion: {
        fecha_sancion: {
        },
        razon: {
        },
        puntos_sancion: {
          integer,
        },
        suspendido: {
          integer,
        },
        juegos_suspendidos: {
          integer,
        },
        expulsado: {
          integer,
        },
        id_delegacion: {
          integer,
        },
        id_competencia: {
          integer,
        },
      },
    }
    export const feedbacks = {
      sancion: {
      id_sancion: {
        isUnique: 'This id_sancion has been taken' 

      },
      },
    }
