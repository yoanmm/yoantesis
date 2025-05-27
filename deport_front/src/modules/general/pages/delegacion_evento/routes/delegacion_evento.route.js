export default [
    {
        path: '/general/delegacion_evento_list',
        name: 'delegacion_evento_list',
        component:()=> import('@/modules/general/pages/delegacion_evento/list/delegacion_evento_list.vue'),
    },
    {
        path: '/general/delegacion_evento_form',
        name: 'delegacion_evento_form',
        component:()=> import('@/modules/general/pages/delegacion_evento/form/delegacion_evento_form.vue'),
    },
]
