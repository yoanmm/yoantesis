/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './juego_fase.columns';

  import * as validation from './juego_fase.validation';

  const url = 'general/juego_fase';

    export default class Juego_fase extends BaseModel {

       id_fase
       nombre_fase
       es_final

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_fase = attributes.id_fase|| undefined
        this.nombre_fase = attributes.nombre_fase|| null
        this.es_final = attributes.es_final=='1'?true:false
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_fase = attributes.id_fase
        this.nombre_fase = attributes.nombre_fase
        this.es_final = attributes.es_final
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
      return this.id_fase;
    }
    class_name() {
        return 'Juego_fase'
      }
  

   }

