export default [
    {
        path: '/security/rol_list',
        name: 'rol_list',
        component:()=> import('@/modules/security/pages/rol/list/rol_list.vue'),
    },
    {
        path: '/security/rol_form',
        name: 'rol_form',
        component:()=> import('@/modules/security/pages/rol/form/rol_form.vue'),
    },
]
