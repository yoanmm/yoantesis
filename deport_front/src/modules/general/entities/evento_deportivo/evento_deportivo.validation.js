import {
    required,
    integer,
    between,
    maxLength,
    minLength,
    decimal
  } from 'vuelidate/lib/validators';
import moment from 'moment';
import * as mb from "@/helpers/loaders/model.load"

    // Validador personalizado para comparar fechas
    const fechaFinNoMenorQueInicio = (value, vm) => {
      if (!value || !vm.fecha_inicio) return true;
      const inicio = moment(vm.fecha_inicio);
      const fin = moment(value);
      return fin.isSameOrAfter(inicio, 'day');
    };

    export const validations = {
      evento_deportivo: {
        nombre_evento: {
          required
        },
        descripcion_evento: {
        },
        logo: {
        },
        fecha_inicio: {
          required
        },
        fecha_fin: {
          required,
          fechaFinNoMenorQueInicio
        },
        curso: {
          required
        },
        edicion_evento: {
          required
        },
        terminado: {
          integer,
        },
        resultado_edicion: {
          maxLength: maxLength(65535),
        },
        descripcion_delegaciones: {
        },
        id_regla_evento: {
          integer,
        },
        reglamento: {
        },
      },
    }
    export const feedbacks = {
      evento_deportivo: {
        id_evento: {
          isUnique: 'This id_evento has been taken'
        },
        fecha_fin: {
          fechaFinNoMenorQueInicio: 'La fecha de fin no puede ser menor que la fecha de inicio.'
        }
      },
    }
