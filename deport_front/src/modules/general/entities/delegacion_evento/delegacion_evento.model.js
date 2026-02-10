/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './delegacion_evento.columns';

  import * as validation from './delegacion_evento.validation';

  const url = 'general/delegacion_evento';

    export default class Delegacion_evento extends BaseModel {

       id_delegacion_evento
       id_evento
       id_delegacion
      
    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_delegacion_evento = attributes.id_delegacion_evento|| undefined
        this.id_evento = attributes.id_evento|| null
        this.id_delegacion = attributes.id_delegacion|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_delegacion_evento = attributes.id_delegacion_evento
        this.id_evento = attributes.id_evento
        this.id_delegacion = attributes.id_delegacion
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
      return this.id_delegacion_evento;
    }
    class_name() {
        return 'Delegacion_evento'
      }
  

   }

