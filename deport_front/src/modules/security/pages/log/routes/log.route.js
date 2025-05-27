export default [
    {
        path: '/security/log_list',
        name: 'log_list',
        component:()=> import('@/modules/security/pages/log/list/log_list.vue'),
    },
    {
        path: '/security/log_form',
        name: 'log_form',
        component:()=> import('@/modules/security/pages/log/form/log_form.vue'),
    },
]
