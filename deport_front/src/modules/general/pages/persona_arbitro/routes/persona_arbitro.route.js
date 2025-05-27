export default [
    {
        path: '/general/persona_arbitro_list',
        name: 'persona_arbitro_list',
        component:()=> import('@/modules/general/pages/persona_arbitro/list/persona_arbitro_list.vue'),
    },
    {
        path: '/general/persona_arbitro_form',
        name: 'persona_arbitro_form',
        component:()=> import('@/modules/general/pages/persona_arbitro/form/persona_arbitro_form.vue'),
    },
]
