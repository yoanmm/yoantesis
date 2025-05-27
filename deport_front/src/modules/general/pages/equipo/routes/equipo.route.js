export default [
    {
        path: '/general/equipo_list',
        name: 'equipo_list',
        component:()=> import('@/modules/general/pages/equipo/list/equipo_list.vue'),
    },
    {
        path: '/general/equipo_form',
        name: 'equipo_form',
        component:()=> import('@/modules/general/pages/equipo/form/equipo_form.vue'),
    },
]
