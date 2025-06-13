/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './competencia.columns';

  import * as validation from './competencia.validation';

  import moment from 'moment';

  const url = 'general/competencia';

    export default class Competencia extends BaseModel {

       id_competencia
       id_evento
       id_deporte
       id_supervisor
       resultado_competencia
       terminado
       fin_inscripcion

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_competencia = attributes.id_competencia|| undefined
        this.id_evento = attributes.id_evento|| null
        this.id_deporte = attributes.id_deporte|| null
        this.id_supervisor = attributes.id_supervisor|| null
        this.resultado_competencia = attributes.resultado_competencia|| null
        this.terminado = attributes.terminado=='1'?true:false
        this.fin_inscripcion = attributes.fin_inscripcion?moment(attributes.fin_inscripcion):null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_competencia = attributes.id_competencia
        this.id_evento = attributes.id_evento
        this.id_deporte = attributes.id_deporte
        this.id_supervisor = attributes.id_supervisor
        this.resultado_competencia = attributes.resultado_competencia
        this.terminado = attributes.terminado
        this.fin_inscripcion = moment(attributes.fin_inscripcion).format('YYYY-MM-DD')
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
      return this.id_competencia;
    }
    class_name() {
        return 'Competencia'
      }
  

   }

