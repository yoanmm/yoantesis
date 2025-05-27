/**Generate by ASGENS
*@author Charlietyn 
*@date Fri May 09 13:47:33 GMT-04:00 2025  
*@time Fri May 09 13:47:33 GMT-04:00 2025  
*/
  import BaseModel from '@/core/base/base.model';

  import * as columns from './rol.columns';

  import * as validation from './rol.validation';

  import moment from 'moment';

  const url = 'security/rol';

    export default class Rol extends BaseModel {

       id_rol
       nombre_rol
       activo
       creado
       actualizado

    constructor(attributes = null) {
      super();
      if (attributes != null) {

        this.id_rol = attributes.id_rol|| undefined
        this.nombre_rol = attributes.nombre_rol|| null
        this.activo = attributes.activo=='1'?true:false
        this.creado = attributes.creado?moment(attributes.creado):null
        this.actualizado = attributes.actualizado?moment(attributes.actualizado):null
      }
    }

    set_attributes(attributes = null) {
      if (attributes != null) {

        this.id_rol = attributes.id_rol
        this.nombre_rol = attributes.nombre_rol
        this.activo = attributes.activo
        this.creado = moment(attributes.creado).format('YYYY-MM-DD')
        this.actualizado = moment(attributes.actualizado).format('YYYY-MM-DD')
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
      return this.id_rol;
    }
    class_name() {
        return 'Rol'
      }
  

   }

