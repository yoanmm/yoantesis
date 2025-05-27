/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './permisos.columns';

  import * as validation from './permisos.validation';

  const url = 'security/permisos';

    export default class Permisos extends BaseModel {

       id_permiso
       nombre_permiso
       code
       modulo
       controller
       accion
       habilitado

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_permiso = attributes.id_permiso|| undefined
        this.nombre_permiso = attributes.nombre_permiso|| null
        this.code = attributes.code|| null
        this.modulo = attributes.modulo|| null
        this.controller = attributes.controller|| null
        this.accion = attributes.accion|| null
        this.habilitado = attributes.habilitado=='1'?true:false
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_permiso = attributes.id_permiso
        this.nombre_permiso = attributes.nombre_permiso
        this.code = attributes.code
        this.modulo = attributes.modulo
        this.controller = attributes.controller
        this.accion = attributes.accion
        this.habilitado = attributes.habilitado
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
      return this.id_permiso;
    }
    class_name() {
        return 'Permisos'
      }
  

   }

