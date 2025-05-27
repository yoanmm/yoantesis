export default [
    {
        path: '/general/delegacion_list',
        name: 'delegacion_list',
        component:()=> import('@/modules/general/pages/delegacion/list/delegacion_list.vue'),
    },
    {
        path: '/general/delegacion_form',
        name: 'delegacion_form',
        component:()=> import('@/modules/general/pages/delegacion/form/delegacion_form.vue'),
    },
]
