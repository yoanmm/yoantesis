export default [
    {
        path: '/general/atleta_tipo_list',
        name: 'atleta_tipo_list',
        component:()=> import('@/modules/general/pages/atleta_tipo/list/atleta_tipo_list.vue'),
    },
    {
        path: '/general/atleta_tipo_form',
        name: 'atleta_tipo_form',
        component:()=> import('@/modules/general/pages/atleta_tipo/form/atleta_tipo_form.vue'),
    },
]
