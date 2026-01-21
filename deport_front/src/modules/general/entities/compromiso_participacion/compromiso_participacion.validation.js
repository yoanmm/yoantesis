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
  compromiso_participacion: {
    id_compromiso: {
      required,
      integer,
    },
    id_delegacion_evento: {
      required,
      integer,
    },
    id_deporte: {
      required,
      integer,
    },
  },
};

export const feedbacks = {
  compromiso_participacion: {
    id_compromiso: {
      required: "El ID de compromiso es requerido",
      integer: "El ID de compromiso debe ser un número entero",
    },
    id_delegacion_evento: {
      required: "La delegación evento es requerida",
      integer: "La delegación evento debe ser un número entero",
    },
    id_deporte: {
      required: "El deporte es requerido",
      integer: "El deporte debe ser un número entero",
    },
  },
};
