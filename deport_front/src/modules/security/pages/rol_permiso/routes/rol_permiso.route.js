export default [
    {
        path: '/security/rol_permiso_list',
        name: 'rol_permiso_list',
        component:()=> import('@/modules/security/pages/rol_permiso/list/rol_permiso_list.vue'),
    },
    {
        path: '/security/rol_permiso_form',
        name: 'rol_permiso_form',
        component:()=> import('@/modules/security/pages/rol_permiso/form/rol_permiso_form.vue'),
    },
]
