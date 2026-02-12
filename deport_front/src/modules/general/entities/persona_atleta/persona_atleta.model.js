/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './persona_atleta.columns';

  import * as validation from './persona_atleta.validation';

  const url = 'general/persona_atleta';

    export default class Persona_atleta extends BaseModel {

       id_atleta
       id_persona
       id_tipo
       foto
       tamaño
       peso
       

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_atleta = attributes.id_atleta|| undefined
        this.id_persona = attributes.id_persona|| null
        this.id_tipo = attributes.id_tipo|| null
        this.foto = attributes.foto|| null
        this.tamaño = attributes.tamaño|| null
        this.peso = attributes.peso|| null
        
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_atleta = attributes.id_atleta
        this.id_persona = attributes.id_persona
        this.id_tipo = attributes.id_tipo
        this.foto = attributes.foto
        this.tamaño = attributes.tamaño
        this.peso = attributes.peso
        
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
      return this.id_atleta;
    }
    class_name() {
        return 'Persona_atleta'
      }
  

   }

