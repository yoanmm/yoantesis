/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './deporte.columns';

  import * as validation from './deporte.validation';

  const url = 'general/deporte';

    export default class Deporte extends BaseModel {

       id_deporte
       nombre_deporte
       max_atleta
       min_atleta
       icono_deporte
       genero
       individual
       id_categoria
       id_regla
       id_deporte_padre
       reglamento
       activo

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_deporte = attributes.id_deporte|| undefined
        this.nombre_deporte = attributes.nombre_deporte|| null
        this.max_atleta = attributes.max_atleta|| null
        this.min_atleta = attributes.min_atleta|| null
        this.icono_deporte = attributes.icono_deporte|| null
        this.genero = attributes.genero|| null
        this.individual = attributes.individual=='1'?true:false
        this.id_categoria = attributes.id_categoria|| null
        this.id_regla = attributes.id_regla|| null
        this.id_deporte_padre = attributes.id_deporte_padre|| null
        this.reglamento = attributes.reglamento|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_deporte = attributes.id_deporte
        this.nombre_deporte = attributes.nombre_deporte
        this.max_atleta = attributes.max_atleta
        this.min_atleta = attributes.min_atleta
        this.icono_deporte = attributes.icono_deporte
        this.genero = attributes.genero
        this.individual = attributes.individual
        this.id_categoria = attributes.id_categoria
        this.id_regla = attributes.id_regla
        this.id_deporte_padre = attributes.id_deporte_padre
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
      return this.id_deporte;
    }
    class_name() {
        return 'Deporte'
      }
  

   }

