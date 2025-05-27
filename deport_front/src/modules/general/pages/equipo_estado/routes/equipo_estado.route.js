export default [
    {
        path: '/general/equipo_estado_list',
        name: 'equipo_estado_list',
        component:()=> import('@/modules/general/pages/equipo_estado/list/equipo_estado_list.vue'),
    },
    {
        path: '/general/equipo_estado_form',
        name: 'equipo_estado_form',
        component:()=> import('@/modules/general/pages/equipo_estado/form/equipo_estado_form.vue'),
    },
]
