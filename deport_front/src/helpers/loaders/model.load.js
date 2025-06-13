/**
*@author Yoan
*@date Thu Dec 30 02:00:31 GMT-05:00 2021
*@time Thu Dec 30 02:00:31 GMT-05:00 2021
*/
import * as utils from '@/helpers/helpers/utils'

const requireModule = require.context("@/", true, /(model.js$)/);
const regexp = new RegExp(/(\.\/|\.model.js)/g)
const classes = utils.dynamic_import(regexp, requireModule)

export function instance(class_name, attributes) {
    let class_instance = new classes[class_name].default(attributes)
    return utils.set_proxy(class_instance)
}

export function statics(class_name) {
    try {
        return classes[class_name].default
    }catch (e){
        console.warn(`The model ${class_name} does not exist`)
        e.message=`The model ${class_name} does not exist`
        throw e
    }
}

export default classes
