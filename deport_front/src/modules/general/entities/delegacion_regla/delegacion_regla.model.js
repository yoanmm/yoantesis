/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './delegacion_regla.columns';

  import * as validation from './delegacion_regla.validation';

  const url = 'general/delegacion_regla';

    export default class Delegacion_regla extends BaseModel {

       id_regla_delegacion
       nombre_regla
       regla

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_regla_delegacion = attributes.id_regla_delegacion|| undefined
        this.nombre_regla = attributes.nombre_regla|| null
        this.regla = attributes.regla|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_regla_delegacion = attributes.id_regla_delegacion
        this.nombre_regla = attributes.nombre_regla
        this.regla = attributes.regla
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
      return this.id_regla_delegacion;
    }
    class_name() {
        return 'Delegacion_regla'
      }
  

   }

