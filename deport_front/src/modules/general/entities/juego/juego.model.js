/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './juego.columns';

  import * as validation from './juego.validation';

  import moment from 'moment';

  const url = 'general/juego';

    export default class Juego extends BaseModel {

       id_juego
       fecha_inicio
       fecha_fin
       descripcion_juego
       id_competencia
       id_fase
       id_cancha

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_juego = attributes.id_juego|| undefined
        this.fecha_inicio = attributes.fecha_inicio?moment(attributes.fecha_inicio):null
        this.fecha_fin = attributes.fecha_fin?moment(attributes.fecha_fin):null
        this.descripcion_juego = attributes.descripcion_juego|| null
        this.id_competencia = attributes.id_competencia|| null
        this.id_fase = attributes.id_fase|| null
        this.id_cancha = attributes.id_cancha|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_juego = attributes.id_juego
        this.fecha_inicio = moment(attributes.fecha_inicio).format('YYYY-MM-DD')
        this.fecha_fin = moment(attributes.fecha_fin).format('YYYY-MM-DD')
        this.descripcion_juego = attributes.descripcion_juego
        this.id_competencia = attributes.id_competencia
        this.id_fase = attributes.id_fase
        this.id_cancha = attributes.id_cancha
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
      return this.id_juego;
    }
    class_name() {
        return 'Juego'
      }
  

   }

