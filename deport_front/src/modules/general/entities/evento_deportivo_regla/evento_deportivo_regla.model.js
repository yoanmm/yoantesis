/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './evento_deportivo_regla.columns';

  import * as validation from './evento_deportivo_regla.validation';

  const url = 'general/evento_deportivo_regla';

    export default class Evento_deportivo_regla extends BaseModel {

       id_regla_evento
       nombre_regla
       regla

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_regla_evento = attributes.id_regla_evento|| undefined
        this.nombre_regla = attributes.nombre_regla|| null
        this.regla = attributes.regla|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_regla_evento = attributes.id_regla_evento
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
      return this.id_regla_evento;
    }
    class_name() {
        return 'Evento_deportivo_regla'
      }
  

   }

