export default [
    {
        path: '/general/persona_list',
        name: 'persona_list',
        component:()=> import('@/modules/general/pages/persona/list/persona_list.vue'),
    },
    {
        path: '/general/persona_form',
        name: 'persona_form',
        component:()=> import('@/modules/general/pages/persona/form/persona_form.vue'),
    },
]
