export default [
    {
        path: '/general/congresillo_deporte_list',
        name: 'congresillo_deporte_list',
        component:()=> import('@/modules/general/pages/congresillo_deporte/list/congresillo_deporte_list.vue'),
    },
    {
        path: '/general/congresillo_deporte_form',
        name: 'congresillo_deporte_form',
        component:()=> import('@/modules/general/pages/congresillo_deporte/form/congresillo_deporte_form.vue'),
    },
]
