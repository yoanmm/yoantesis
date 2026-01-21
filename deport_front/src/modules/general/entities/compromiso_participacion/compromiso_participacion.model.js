/**Generate by ASGENS
*@author [Tu Nombre] 
*@date [Fecha Actual]  
*@time [Hora Actual]  
*/
import BaseModel from '@/core/base/base.model';

import * as columns from './compromiso_participacion.columns';

import * as validation from './compromiso_participacion.validation';

const url = 'general/compromiso_participacion';

export default class Compromiso_participacion extends BaseModel {

    id_compromiso
    id_delegacion_evento
    id_deporte

    constructor(attributes = null) {
        super();
        if (attributes != null) {
            this.id_compromiso = attributes.id_compromiso || undefined
            this.id_delegacion_evento = attributes.id_delegacion_evento || null
            this.id_deporte = attributes.id_deporte || null
        }
    }

    set_attributes(attributes = null) {
        if (attributes != null) {
            this.id_compromiso = attributes.id_compromiso
            this.id_delegacion_evento = attributes.id_delegacion_evento
            this.id_deporte = attributes.id_deporte
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
        return this.id_compromiso;
    }
    
    class_name() {
        return 'Compromiso_participacion'
    }

}