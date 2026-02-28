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
      equipo: {
        nombre_equipo: {
          required
        },
        id_competencia: {
          integer,
          required
        },
        id_delegacion: {
          integer,
          required
        },
        id_estado: {
          integer,
        },
      },
    }
    export const feedbacks = {
      equipo: {
      id_equipo: {
        isUnique: 'This id_equipo has been taken' 

      },
      },
    }
