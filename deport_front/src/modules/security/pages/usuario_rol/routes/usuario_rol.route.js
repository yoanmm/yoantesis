export default [
    {
        path: '/security/usuario_rol_list',
        name: 'usuario_rol_list',
        component:()=> import('@/modules/security/pages/usuario_rol/list/usuario_rol_list.vue'),
    },
    {
        path: '/security/usuario_rol_form',
        name: 'usuario_rol_form',
        component:()=> import('@/modules/security/pages/usuario_rol/form/usuario_rol_form.vue'),
    },
]
