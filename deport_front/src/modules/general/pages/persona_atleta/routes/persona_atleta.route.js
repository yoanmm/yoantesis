export default [
    {
        path: '/general/persona_atleta_list',
        name: 'persona_atleta_list',
        component:()=> import('@/modules/general/pages/persona_atleta/list/persona_atleta_list.vue'),
    },
    {
        path: '/general/persona_atleta_form',
        name: 'persona_atleta_form',
        component:()=> import('@/modules/general/pages/persona_atleta/form/persona_atleta_form.vue'),
    },
]
