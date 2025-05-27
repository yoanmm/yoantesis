export default [
    {
        path: '/general/reclamacion_estado_list',
        name: 'reclamacion_estado_list',
        component:()=> import('@/modules/general/pages/reclamacion_estado/list/reclamacion_estado_list.vue'),
    },
    {
        path: '/general/reclamacion_estado_form',
        name: 'reclamacion_estado_form',
        component:()=> import('@/modules/general/pages/reclamacion_estado/form/reclamacion_estado_form.vue'),
    },
]
