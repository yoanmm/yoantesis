/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './usuario_rol.columns';

  import * as validation from './usuario_rol.validation';

  const url = 'security/usuario_rol';

    export default class Usuario_rol extends BaseModel {

      id_user_rol
      id_usuario
      id_roles = [] // array de roles

    constructor(attributes = null) {
      super();
      if (attributes != null) {
        this.id_user_rol = attributes.id_user_rol|| undefined
        this.id_usuario = attributes.id_usuario|| null
        // Soporta array de roles
        this.id_roles = Array.isArray(attributes.id_roles) ? attributes.id_roles : (attributes.id_roles ? [attributes.id_roles] : []);
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {
        this.id_user_rol = attributes.id_user_rol
        this.id_usuario = attributes.id_usuario
        this.id_roles = Array.isArray(attributes.id_roles) ? attributes.id_roles : (attributes.id_roles ? [attributes.id_roles] : []);
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
      return this.id_user_rol;
    }
    class_name() {
        return 'Usuario_rol'
      }
  

   }

