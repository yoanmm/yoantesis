/**Generate by ASGENS
*@author Charlietyn 
*@date Thu Dec 30 02:00:31 GMT-05:00 2021  
*@time Thu Dec 30 02:00:31 GMT-05:00 2021  
*/
const requireModule = require.context("@/", true, /(route.js$)/);
let router_array = []
requireModule.keys().forEach((fileName, index) => {
        const elem = {...requireModule(fileName)}
        router_array=router_array.concat(...Object.values(elem))
    }
)
export default router_array;
