/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './deporte_categoria_puntuacion.columns';

  import * as validation from './deporte_categoria_puntuacion.validation';

  const url = 'general/deporte_categoria_puntuacion';

    export default class Deporte_categoria_puntuacion extends BaseModel {

       id_categoria
       nombre_categoria
       puntos

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_categoria = attributes.id_categoria|| undefined
        this.nombre_categoria = attributes.nombre_categoria|| null
        this.puntos = attributes.puntos|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_categoria = attributes.id_categoria
        this.nombre_categoria = attributes.nombre_categoria
        this.puntos = attributes.puntos
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
      return this.id_categoria;
    }
    class_name() {
        return 'Deporte_categoria_puntuacion'
      }
  

   }

