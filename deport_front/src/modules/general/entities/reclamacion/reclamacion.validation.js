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
      reclamacion: {
        id_reclamacion: {
          required,
          integer,
        },
        fecha_reclamacion: {
        },
        descripcion_reclamacion: {
        },
        id_delegacion: {
          integer,
        },
        id_sancion: {
          integer,
        },
        id_estado: {
          integer,
        },
      },
    }
    export const feedbacks = {
      reclamacion: {
      id_reclamacion: {
        isUnique: 'This id_reclamacion has been taken' 

      },
      },
    }
