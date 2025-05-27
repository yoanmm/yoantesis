/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './atleta_tipo.columns';

  import * as validation from './atleta_tipo.validation';

  const url = 'general/atleta_tipo';

    export default class Atleta_tipo extends BaseModel {

       id_tipo
       tipo_atleta

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_tipo = attributes.id_tipo|| undefined
        this.tipo_atleta = attributes.tipo_atleta|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_tipo = attributes.id_tipo
        this.tipo_atleta = attributes.tipo_atleta
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
      return this.id_tipo;
    }
    class_name() {
        return 'Atleta_tipo'
      }
  

   }

