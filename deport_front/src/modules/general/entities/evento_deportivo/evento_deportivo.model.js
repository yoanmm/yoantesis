/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './evento_deportivo.columns';

  import * as validation from './evento_deportivo.validation';

  import moment from 'moment';

  const url = 'general/evento_deportivo';

    export default class Evento_deportivo extends BaseModel {

       id_evento
       nombre_evento
       descripcion_evento
       logo
       fecha_inicio
       fecha_fin
       curso
       edicion_evento
       terminado
       resultado_edicion
       descripcion_delegaciones
       id_regla_evento
       reglamento
       activo

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_evento = attributes.id_evento|| undefined
        this.nombre_evento = attributes.nombre_evento|| null
        this.descripcion_evento = attributes.descripcion_evento|| null
        this.logo = attributes.logo|| null
        this.fecha_inicio = attributes.fecha_inicio?moment(attributes.fecha_inicio):null
        this.fecha_fin = attributes.fecha_fin?moment(attributes.fecha_fin):null
        this.curso = attributes.curso|| null
        this.edicion_evento = attributes.edicion_evento|| null
        this.terminado = attributes.terminado=='1'?true:false
        this.resultado_edicion = attributes.resultado_edicion|| null
        this.descripcion_delegaciones = attributes.descripcion_delegaciones|| null
        this.id_regla_evento = attributes.id_regla_evento|| null
        this.reglamento = attributes.reglamento|| null
        this.activo = attributes.activo|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_evento = attributes.id_evento
        this.nombre_evento = attributes.nombre_evento
        this.descripcion_evento = attributes.descripcion_evento
        this.logo = attributes.logo
        this.fecha_inicio = moment(attributes.fecha_inicio).format('YYYY-MM-DD')
        this.fecha_fin = moment(attributes.fecha_fin).format('YYYY-MM-DD')
        this.curso = attributes.curso
        this.edicion_evento = attributes.edicion_evento
        this.terminado = attributes.terminado
        this.resultado_edicion = attributes.resultado_edicion
        this.descripcion_delegaciones = attributes.descripcion_delegaciones
        this.id_regla_evento = attributes.id_regla_evento
        this.reglamento = attributes.reglamento
        this.activo = attributes.activo
      }
    }

    static validations = validation.validations

    static feedbacks = validation.feedbacks

  static columns = columns.columns

    static get url() {
      return url
    };
  
    get url() {
      return url
    };
  
    get_id() {
      return this.id_evento;
    }
    class_name() {
        return 'Evento_deportivo'
      }
  

   }

