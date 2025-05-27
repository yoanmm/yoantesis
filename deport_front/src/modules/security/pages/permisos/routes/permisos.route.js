export default [
    {
        path: '/security/permisos_list',
        name: 'permisos_list',
        component:()=> import('@/modules/security/pages/permisos/list/permisos_list.vue'),
    },
    {
        path: '/security/permisos_form',
        name: 'permisos_form',
        component:()=> import('@/modules/security/pages/permisos/form/permisos_form.vue'),
    },
]
