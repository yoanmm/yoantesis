export default [
    {
        path: '/general/deporte_regla_list',
        name: 'deporte_regla_list',
        component:()=> import('@/modules/general/pages/deporte_regla/list/deporte_regla_list.vue'),
    },
    {
        path: '/general/deporte_regla_form',
        name: 'deporte_regla_form',
        component:()=> import('@/modules/general/pages/deporte_regla/form/deporte_regla_form.vue'),
    },
]
