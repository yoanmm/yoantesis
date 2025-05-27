/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './congresillo_asistencia.columns';

  import * as validation from './congresillo_asistencia.validation';

  const url = 'general/congresillo_asistencia';

    export default class Congresillo_asistencia extends BaseModel {

       id_asistencia_congresillo
       representante
       id_delegacion
       id_congresillo

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_asistencia_congresillo = attributes.id_asistencia_congresillo|| undefined
        this.representante = attributes.representante|| null
        this.id_delegacion = attributes.id_delegacion|| null
        this.id_congresillo = attributes.id_congresillo|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_asistencia_congresillo = attributes.id_asistencia_congresillo
        this.representante = attributes.representante
        this.id_delegacion = attributes.id_delegacion
        this.id_congresillo = attributes.id_congresillo
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
      return this.id_asistencia_congresillo;
    }
    class_name() {
        return 'Congresillo_asistencia'
      }
  

   }

