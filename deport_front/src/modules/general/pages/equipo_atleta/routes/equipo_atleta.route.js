export default [
    {
        path: '/general/equipo_atleta_list',
        name: 'equipo_atleta_list',
        component:()=> import('@/modules/general/pages/equipo_atleta/list/equipo_atleta_list.vue'),
    },
    {
        path: '/general/equipo_atleta_form',
        name: 'equipo_atleta_form',
        component:()=> import('@/modules/general/pages/equipo_atleta/form/equipo_atleta_form.vue'),
    },
]
