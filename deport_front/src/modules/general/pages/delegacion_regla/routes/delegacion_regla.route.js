export default [
    {
        path: '/general/delegacion_regla_list',
        name: 'delegacion_regla_list',
        component:()=> import('@/modules/general/pages/delegacion_regla/list/delegacion_regla_list.vue'),
    },
    {
        path: '/general/delegacion_regla_form',
        name: 'delegacion_regla_form',
        component:()=> import('@/modules/general/pages/delegacion_regla/form/delegacion_regla_form.vue'),
    },
]
