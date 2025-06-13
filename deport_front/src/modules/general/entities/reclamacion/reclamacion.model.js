/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './reclamacion.columns';

  import * as validation from './reclamacion.validation';

  import moment from 'moment';

  const url = 'general/reclamacion';

    export default class Reclamacion extends BaseModel {

       id_reclamacion
       fecha_reclamacion
       descripcion_reclamacion
       id_delegacion
       id_sancion
       id_estado

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_reclamacion = attributes.id_reclamacion|| undefined
        this.fecha_reclamacion = attributes.fecha_reclamacion?moment(attributes.fecha_reclamacion):null
        this.descripcion_reclamacion = attributes.descripcion_reclamacion|| null
        this.id_delegacion = attributes.id_delegacion|| null
        this.id_sancion = attributes.id_sancion|| null
        this.id_estado = attributes.id_estado|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_reclamacion = attributes.id_reclamacion
        this.fecha_reclamacion = moment(attributes.fecha_reclamacion).format('YYYY-MM-DD')
        this.descripcion_reclamacion = attributes.descripcion_reclamacion
        this.id_delegacion = attributes.id_delegacion
        this.id_sancion = attributes.id_sancion
        this.id_estado = attributes.id_estado
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
      return this.id_reclamacion;
    }
    class_name() {
        return 'Reclamacion'
      }
  

   }

