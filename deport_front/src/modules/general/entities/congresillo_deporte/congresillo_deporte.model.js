/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './congresillo_deporte.columns';

  import * as validation from './congresillo_deporte.validation';

  import moment from 'moment';

  const url = 'general/congresillo_deporte';

    export default class Congresillo_deporte extends BaseModel {

       id_congresillo
       fecha_congresillo
       id_competencia

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_congresillo = attributes.id_congresillo|| undefined
        this.fecha_congresillo = attributes.fecha_congresillo?moment(attributes.fecha_congresillo):null
        this.id_competencia = attributes.id_competencia|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_congresillo = attributes.id_congresillo
        this.fecha_congresillo = moment(attributes.fecha_congresillo).format('YYYY-MM-DD')
        this.id_competencia = attributes.id_competencia
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
      return this.id_congresillo;
    }
    class_name() {
        return 'Congresillo_deporte'
      }
  

   }

