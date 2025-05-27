export default [
    {
        path: '/security/usuarios_list',
        name: 'usuarios_list',
        component:()=> import('@/modules/security/pages/usuarios/list/usuarios_list.vue'),
    },
    {
        path: '/security/usuarios_form',
        name: 'usuarios_form',
        component:()=> import('@/modules/security/pages/usuarios/form/usuarios_form.vue'),
    },
]
