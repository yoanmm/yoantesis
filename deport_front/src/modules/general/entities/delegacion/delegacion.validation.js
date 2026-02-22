import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal,
    alpha,
  } from 'vuelidate/lib/validators';
import * as mb from "@/helpers/loaders/model.load"
import { alphaOnly, alphaMax5, acceptedReglamentoExtensions, acceptedExtensions } from '@/validators/customValidators';

    export const validations = {
      delegacion: {
        nombre_delegacion: {
          required,
          alphaOnly
        },
        abreviatura: {
          alphaMax5
        },
        mascota: {
          required,
          acceptedExtensions: 'Solo se aceptan archivos .png, .jpg, .jpeg, .svg'
        },
        color: {
          required,
        },
        logo: {
          required,
          acceptedExtensions: 'Solo se aceptan archivos .png, .jpg, .jpeg, .svg'
        },
        id_tipo_delegacion: {
          integer,
          required
        },
        id_regla_delegacion: {
          integer,
        },
        reglamento: {
          acceptedReglamentoExtensions: 'Solo se aceptan archivos .pdf, .doc, .docx, .txt'
        },
      },
    }
    export const feedbacks = {
      delegacion: {
        id_delegacion: {
          isUnique: 'This id_delegacion has been taken' 
        },
        mascota: {
          acceptedExtensions: 'Solo se aceptan archivos .png, .jpg, .jpeg, .svg'
        },
        logo: {
          acceptedExtensions: 'Solo se aceptan archivos .png, .jpg, .jpeg, .svg'
        },
        reglamento: {
          acceptedReglamentoExtensions: 'Solo se aceptan archivos .pdf, .doc, .docx, .txt'
        },
      },
    }
