/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './deporte_regla.columns';

  import * as validation from './deporte_regla.validation';

  const url = 'general/deporte_regla';

    export default class Deporte_regla extends BaseModel {

       id_regla_deporte
       nombre_regla
       campos
       cal_campos

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_regla_deporte = attributes.id_regla_deporte|| undefined
        this.nombre_regla = attributes.nombre_regla|| null
        this.campos = attributes.campos|| null
        this.cal_campos = attributes.cal_campos|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_regla_deporte = attributes.id_regla_deporte
        this.nombre_regla = attributes.nombre_regla
        this.campos = attributes.campos
        this.cal_campos = attributes.cal_campos
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
      return this.id_regla_deporte;
    }
    class_name() {
        return 'Deporte_regla'
      }
  

   }

