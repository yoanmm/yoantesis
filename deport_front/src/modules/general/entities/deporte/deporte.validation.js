import {
  required,
  integer,
  between,
  maxLength,
  minLength,
  decimal
} from 'vuelidate/lib/validators';
import * as mb from "@/helpers/loaders/model.load";
import { acceptedExtensions, acceptedReglamentoExtensions } from '@/validators/customValidators';

export const validations = {
  deporte: {
    nombre_deporte: {
      required,
    },
    max_atleta: {
      integer,
      required,
      // Valida que el máximo sea mayor o igual al mínimo si ambos existen
      isGreaterOrEqual: (value, { min_atleta }) => {
        if (!value || !min_atleta) return true;
        return parseInt(value) >= parseInt(min_atleta);
      }
    },
    min_atleta: {
      integer,
      required,
      // Valida que el mínimo sea menor o igual al máximo si ambos existen
      isSmallerOrEqual: (value, { max_atleta }) => {
        if (!value || !max_atleta) return true;
        return parseInt(value) <= parseInt(max_atleta);
      }
    },
    icono_deporte: {
      acceptedExtensions: 'Solo se aceptan archivos .png, .jpg, .jpeg, .svg'
    },
    genero: {
      required
    },
    individual: {
      integer,
    },
    id_categoria: {
      integer,
    },
    id_regla: {
      integer,
    },
    id_deporte_padre: {
      integer,
    },
    reglamento: {
      acceptedReglamentoExtensions: 'Solo se aceptan archivos .pdf, .doc, .docx, .txt'
    },
    activo: {},
  },
}

export const feedbacks = {
  deporte: {
    id_deporte: {
      isUnique: 'This id_deporte has been taken'
    },
    max_atleta: {
      integer: 'Debe ser un número entero',
      required: 'El máximo de atletas es obligatorio',
      isGreaterOrEqual: 'El valor máximo no puede ser menor al mínimo'
    },
    min_atleta: {
      integer: 'Debe ser un número entero',
      required: 'El mínimo de atletas es obligatorio',
      isSmallerOrEqual: 'El valor mínimo no puede ser mayor al máximo'
    },
    icono_deporte: {
      acceptedExtensions: 'Solo se aceptan archivos .png, .jpg, .jpeg, .svg'
    },
    reglamento: {
      acceptedReglamentoExtensions: 'Solo se aceptan archivos .pdf, .doc, .docx, .txt'
    },
  },
}