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
          required
        },
        min_atleta: {
          integer,
          required
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
        icono_deporte: {
          acceptedExtensions: 'Solo se aceptan archivos .png, .jpg, .jpeg, .svg'
        },
        reglamento: {
          acceptedReglamentoExtensions: 'Solo se aceptan archivos .pdf, .doc, .docx, .txt'
        },
      },
    }
