/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './persona.columns';

  import * as validation from './persona.validation';

  const url = 'general/persona';

    export default class Persona extends BaseModel {

       id_persona
       nombre
       apellido
       carnet
       genero
       facultad

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_persona = attributes.id_persona|| undefined
        this.nombre = attributes.nombre|| null
        this.apellido = attributes.apellido|| null
        this.carnet = attributes.carnet|| null
        this.genero = attributes.genero|| null
        this.facultad = attributes.facultad|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_persona = attributes.id_persona
        this.nombre = attributes.nombre
        this.apellido = attributes.apellido
        this.carnet = attributes.carnet
        this.genero = attributes.genero
        this.facultad = attributes.facultad
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
      return this.id_persona;
    }
    class_name() {
        return 'Persona'
      }
  

   }

