/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './cancha.columns';

  import * as validation from './cancha.validation';

  const url = 'general/cancha';

    export default class Cancha extends BaseModel {

       id_cancha
       nombre_cancha

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_cancha = attributes.id_cancha|| undefined
        this.nombre_cancha = attributes.nombre_cancha|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_cancha = attributes.id_cancha
        this.nombre_cancha = attributes.nombre_cancha
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
      return this.id_cancha;
    }
    class_name() {
        return 'Cancha'
      }
  

   }

