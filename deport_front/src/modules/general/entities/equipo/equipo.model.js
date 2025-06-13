/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './equipo.columns';

  import * as validation from './equipo.validation';

  const url = 'general/equipo';

    export default class Equipo extends BaseModel {

       id_equipo
       nombre_equipo
       id_competencia
       id_delegacion
       id_estado

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_equipo = attributes.id_equipo|| undefined
        this.nombre_equipo = attributes.nombre_equipo|| null
        this.id_competencia = attributes.id_competencia|| null
        this.id_delegacion = attributes.id_delegacion|| null
        this.id_estado = attributes.id_estado|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_equipo = attributes.id_equipo
        this.nombre_equipo = attributes.nombre_equipo
        this.id_competencia = attributes.id_competencia
        this.id_delegacion = attributes.id_delegacion
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
      return this.id_equipo;
    }
    class_name() {
        return 'Equipo'
      }
  

   }

