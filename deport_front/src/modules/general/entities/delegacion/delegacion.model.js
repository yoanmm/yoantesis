/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './delegacion.columns';

  import * as validation from './delegacion.validation';

  const url = 'general/delegacion';

    export default class Delegacion extends BaseModel {

       id_delegacion
       nombre_delegacion
       abreviatura
       mascota
       color
       logo
       id_tipo_delegacion
       id_regla_delegacion
       reglamento

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_delegacion = attributes.id_delegacion|| undefined
        this.nombre_delegacion = attributes.nombre_delegacion|| null
        this.abreviatura = attributes.abreviatura|| null
        this.mascota = attributes.mascota|| null
        this.color = attributes.color|| null
        this.logo = attributes.logo|| null
        this.id_tipo_delegacion = attributes.id_tipo_delegacion|| null
        this.id_regla_delegacion = attributes.id_regla_delegacion|| null
        this.reglamento = attributes.reglamento|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_delegacion = attributes.id_delegacion
        this.nombre_delegacion = attributes.nombre_delegacion
        this.abreviatura = attributes.abreviatura
        this.mascota = attributes.mascota
        this.color = attributes.color
        this.logo = attributes.logo
        this.id_tipo_delegacion = attributes.id_tipo_delegacion
        this.id_regla_delegacion = attributes.id_regla_delegacion
        this.reglamento = attributes.reglamento
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
      return this.id_delegacion;
    }
    class_name() {
        return 'Delegacion'
      }
  

   }

