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
      equipo_atleta: {
        id_equipo: {
          integer,
          required,
        },
        id_atleta: {
          integer,
          required
        },
        id_estado_atleta: {
          integer,
        },
        capitan: {
          integer,
        },
        subcapitan: {
          integer,
        },
      },
    }
    export const feedbacks = {
      equipo_atleta: {
      id_equipo_atleta: {
        isUnique: 'This id_equipo_atleta has been taken' 

      },
      },
    }
