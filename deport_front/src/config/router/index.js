import Vue from 'vue'
import Router from 'vue-router'
import router_array from '@/helpers/loaders/router.load'
import login from "../../core/pages/login/login";

Vue.use(Router)
const router = new Router({
    mode: 'history',
    hash: false,
    routes: [
        ...router_array,
    ]
})
router.beforeEach((to, from, next) => {
    if (!Vue.prototype.$store.site.user && (to.name !== 'login' && to.name !== 'reset'))
        next('login')
    else if (Vue.prototype.$store.site.user && (to.name === 'login' || to.name === 'reset'))
        next('index')
    next()
})
export default router
