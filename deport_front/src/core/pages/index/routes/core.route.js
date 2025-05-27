import Vue from 'vue'

export default [
    {
        path: '*',
        redirect: '/'
    },
    {
        path: '/',
        name: 'index',
        component: () => import('@/core/pages/index/index.vue'),
    },
    {
        path: '/reset_password/:hash',
        name: 'reset',
        component: () => import('@/core/pages/reset/reset.vue'),
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('@/core/pages/login/login.vue'),
    },
]