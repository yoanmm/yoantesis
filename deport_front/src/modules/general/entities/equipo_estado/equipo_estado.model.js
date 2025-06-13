/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './equipo_estado.columns';

  import * as validation from './equipo_estado.validation';

  const url = 'general/equipo_estado';

    export default class Equipo_estado extends BaseModel {

       id_estado
       estado_equipo

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_estado = attributes.id_estado|| undefined
        this.estado_equipo = attributes.estado_equipo|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_estado = attributes.id_estado
        this.estado_equipo = attributes.estado_equipo
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
        return 'Equipo_estado'
      }
  

   }

