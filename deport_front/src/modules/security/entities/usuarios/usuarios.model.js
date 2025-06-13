/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './usuarios.columns';

  import * as validation from './usuarios.validation';

  import moment from 'moment';

  const url = 'security/usuarios';

    export default class Usuarios extends BaseModel {

       id_usuario
       username
       password
       correo
       creado
       actualizado
       activo
       id_persona

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_usuario = attributes.id_usuario|| undefined
        this.username = attributes.username|| null
        this.password = attributes.password|| null
        this.correo = attributes.correo|| null
        this.creado = attributes.creado?moment(attributes.creado):null
        this.actualizado = attributes.actualizado?moment(attributes.actualizado):null
        this.activo = attributes.activo=='1'?true:false
        this.id_persona = attributes.id_persona|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_usuario = attributes.id_usuario
        this.username = attributes.username
        this.password = attributes.password
        this.correo = attributes.correo
        this.creado = moment(attributes.creado).format('YYYY-MM-DD')
        this.actualizado = moment(attributes.actualizado).format('YYYY-MM-DD')
        this.activo = attributes.activo
        this.id_persona = attributes.id_persona
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
      return this.id_usuario;
    }
    class_name() {
        return 'Usuarios'
      }
  

   }

