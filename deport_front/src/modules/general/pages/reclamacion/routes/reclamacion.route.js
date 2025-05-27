export default [
    {
        path: '/general/reclamacion_list',
        name: 'reclamacion_list',
        component:()=> import('@/modules/general/pages/reclamacion/list/reclamacion_list.vue'),
    },
    {
        path: '/general/reclamacion_form',
        name: 'reclamacion_form',
        component:()=> import('@/modules/general/pages/reclamacion/form/reclamacion_form.vue'),
    },
]
