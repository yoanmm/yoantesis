/**
*@author Yoan 
*@date Fri May 09 13:47:32 GMT-04:00 2025  
*@time Fri May 09 13:47:32 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './atleta_estado.columns';

  import * as validation from './atleta_estado.validation';

  const url = 'general/atleta_estado';

    export default class Atleta_estado extends BaseModel {

       id_estado
       estado_atleta

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_estado = attributes.id_estado|| undefined
        this.estado_atleta = attributes.estado_atleta|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_estado = attributes.id_estado
        this.estado_atleta = attributes.estado_atleta
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
      return this.id_estado;
    }
    class_name() {
        return 'Atleta_estado'
      }
  

   }

