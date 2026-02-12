/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './juego_delegacion.columns';

  import * as validation from './juego_delegacion.validation';

  const url = 'general/juego_delegacion';

    export default class Juego_delegacion extends BaseModel {

       id_juego_delegacion
       id_juego
       id_delegacion
       resultados

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_juego_delegacion = attributes.id_juego_delegacion|| undefined
        this.id_juego = attributes.id_juego|| null
        this.id_delegacion = attributes.id_delegacion|| null
        this.resultados = attributes.resultados|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_juego_delegacion = attributes.id_juego_delegacion
        this.id_juego = attributes.id_juego
        this.id_delegacion = attributes.id_delegacion
        this.resultados = attributes.resultados
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
      return this.id_juego_delegacion;
    }
    class_name() {
        return 'Juego_delegacion'
      }
  

   }

