export default [
    {
        path: '/general/delegacion_tipo_list',
        name: 'delegacion_tipo_list',
        component:()=> import('@/modules/general/pages/delegacion_tipo/list/delegacion_tipo_list.vue'),
    },
    {
        path: '/general/delegacion_tipo_form',
        name: 'delegacion_tipo_form',
        component:()=> import('@/modules/general/pages/delegacion_tipo/form/delegacion_tipo_form.vue'),
    },
]
