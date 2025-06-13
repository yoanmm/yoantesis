/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './equipo_atleta.columns';

  import * as validation from './equipo_atleta.validation';

  const url = 'general/equipo_atleta';

    export default class Equipo_atleta extends BaseModel {

       id_equipo_atleta
       id_equipo
       id_atleta
       id_estado_atleta
       capitan
       subcapitan

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_equipo_atleta = attributes.id_equipo_atleta|| undefined
        this.id_equipo = attributes.id_equipo|| null
        this.id_atleta = attributes.id_atleta|| null
        this.id_estado_atleta = attributes.id_estado_atleta|| null
        this.capitan = attributes.capitan=='1'?true:false
        this.subcapitan = attributes.subcapitan=='1'?true:false
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_equipo_atleta = attributes.id_equipo_atleta
        this.id_equipo = attributes.id_equipo
        this.id_atleta = attributes.id_atleta
        this.id_estado_atleta = attributes.id_estado_atleta
        this.capitan = attributes.capitan
        this.subcapitan = attributes.subcapitan
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
      return this.id_equipo_atleta;
    }
    class_name() {
        return 'Equipo_atleta'
      }
  

   }

