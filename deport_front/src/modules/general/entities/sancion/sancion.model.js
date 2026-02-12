/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './sancion.columns';

  import * as validation from './sancion.validation';

  import moment from 'moment';

  const url = 'general/sancion';

    export default class Sancion extends BaseModel {

       id_sancion
       fecha_sancion
       razon
       puntos_sancion
       suspendido
       juegos_suspendidos
       expulsado
       id_delegacion
       id_competencia

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_sancion = attributes.id_sancion|| undefined
        this.fecha_sancion = attributes.fecha_sancion?moment(attributes.fecha_sancion):null
        this.razon = attributes.razon|| null
        this.puntos_sancion = attributes.puntos_sancion|| null
        this.suspendido = attributes.suspendido=='1'?true:false
        this.juegos_suspendidos = attributes.juegos_suspendidos|| null
        this.expulsado = attributes.expulsado=='1'?true:false
        this.id_delegacion = attributes.id_delegacion|| null
        this.id_competencia = attributes.id_competencia|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_sancion = attributes.id_sancion
        this.fecha_sancion = moment(attributes.fecha_sancion).format('YYYY-MM-DD')
        this.razon = attributes.razon
        this.puntos_sancion = attributes.puntos_sancion
        this.suspendido = attributes.suspendido
        this.juegos_suspendidos = attributes.juegos_suspendidos
        this.expulsado = attributes.expulsado
        this.id_delegacion = attributes.id_delegacion
        this.id_competencia = attributes.id_competencia
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
      return this.id_sancion;
    }
    class_name() {
        return 'Sancion'
      }
  

   }

