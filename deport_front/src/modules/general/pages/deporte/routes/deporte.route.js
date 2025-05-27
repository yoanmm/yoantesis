export default [
    {
        path: '/general/deporte_list',
        name: 'deporte_list',
        component:()=> import('@/modules/general/pages/deporte/list/deporte_list.vue'),
    },
    {
        path: '/general/deporte_form',
        name: 'deporte_form',
        component:()=> import('@/modules/general/pages/deporte/form/deporte_form.vue'),
    },
]
