export default [
    {
        path: '/general/competencia_list',
        name: 'competencia_list',
        component:()=> import('@/modules/general/pages/competencia/list/competencia_list.vue'),
    },
    {
        path: '/general/competencia_form',
        name: 'competencia_form',
        component:()=> import('@/modules/general/pages/competencia/form/competencia_form.vue'),
    },
]
