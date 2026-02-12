/**
*@author Yoan 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './log.columns';

  import * as validation from './log.validation';

  import moment from 'moment';

  const url = 'security/log';

    export default class Log extends BaseModel {

       id
       nombre_accion
       tabla
       record
       ip
       creado
       actualizado
       id_usuario

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id = attributes.id|| undefined
        this.nombre_accion = attributes.nombre_accion|| null
        this.tabla = attributes.tabla|| null
        this.record = attributes.record|| null
        this.ip = attributes.ip|| null
        this.creado = attributes.creado?moment(attributes.creado):null
        this.actualizado = attributes.actualizado?moment(attributes.actualizado):null
        this.id_usuario = attributes.id_usuario|| null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id = attributes.id
        this.nombre_accion = attributes.nombre_accion
        this.tabla = attributes.tabla
        this.record = attributes.record
        this.ip = attributes.ip
        this.creado = moment(attributes.creado).format('YYYY-MM-DD')
        this.actualizado = moment(attributes.actualizado).format('YYYY-MM-DD')
        this.id_usuario = attributes.id_usuario
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
      return this.id;
    }
    class_name() {
        return 'Log'
      }
  

   }

