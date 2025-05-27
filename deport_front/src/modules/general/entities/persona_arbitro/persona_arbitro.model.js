/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './persona_arbitro.columns';

  import * as validation from './persona_arbitro.validation';

  const url = 'general/persona_arbitro';

    export default class Persona_arbitro extends BaseModel {

       id_supervisor
       id_persona
       id_deporte

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_supervisor = attributes.id_supervisor|| undefined
        this.id_persona = attributes.id_persona|| null
        this.id_deporte = attributes.id_deporte|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_supervisor = attributes.id_supervisor
        this.id_persona = attributes.id_persona
        this.id_deporte = attributes.id_deporte
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
      return this.id_supervisor;
    }
    class_name() {
        return 'Persona_arbitro'
      }
  

   }

