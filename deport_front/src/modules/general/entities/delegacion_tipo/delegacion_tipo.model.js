/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './delegacion_tipo.columns';

  import * as validation from './delegacion_tipo.validation';

  const url = 'general/delegacion_tipo';

    export default class Delegacion_tipo extends BaseModel {

       id_tipo_delegacion
       tipo_delegacion

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_tipo_delegacion = attributes.id_tipo_delegacion|| undefined
        this.tipo_delegacion = attributes.tipo_delegacion|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_tipo_delegacion = attributes.id_tipo_delegacion
        this.tipo_delegacion = attributes.tipo_delegacion
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
      return this.id_tipo_delegacion;
    }
    class_name() {
        return 'Delegacion_tipo'
      }
  

   }

