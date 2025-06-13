/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './rol_permiso.columns';

  import * as validation from './rol_permiso.validation';

  const url = 'security/rol_permiso';

    export default class Rol_permiso extends BaseModel {

       id_rol_permiso
       id_rol
       id_permiso

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_rol_permiso = attributes.id_rol_permiso|| undefined
        this.id_rol = attributes.id_rol|| null
        this.id_permiso = attributes.id_permiso|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_rol_permiso = attributes.id_rol_permiso
        this.id_rol = attributes.id_rol
        this.id_permiso = attributes.id_permiso
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
      return this.id_rol_permiso;
    }
    class_name() {
        return 'Rol_permiso'
      }
  

   }

