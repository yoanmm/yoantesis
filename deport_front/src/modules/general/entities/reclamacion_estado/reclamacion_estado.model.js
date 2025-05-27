/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './reclamacion_estado.columns';

  import * as validation from './reclamacion_estado.validation';

  const url = 'general/reclamacion_estado';

    export default class Reclamacion_estado extends BaseModel {

       id_estado
       nombre_estado

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_estado = attributes.id_estado|| undefined
        this.nombre_estado = attributes.nombre_estado|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_estado = attributes.id_estado
        this.nombre_estado = attributes.nombre_estado
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
        return 'Reclamacion_estado'
      }
  

   }

