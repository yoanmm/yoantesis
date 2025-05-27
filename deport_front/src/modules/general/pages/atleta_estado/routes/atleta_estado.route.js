export default [
    {
        path: '/general/atleta_estado_list',
        name: 'atleta_estado_list',
        component:()=> import('@/modules/general/pages/atleta_estado/list/atleta_estado_list.vue'),
    },
    {
        path: '/general/atleta_estado_form',
        name: 'atleta_estado_form',
        component:()=> import('@/modules/general/pages/atleta_estado/form/atleta_estado_form.vue'),
    },
]
