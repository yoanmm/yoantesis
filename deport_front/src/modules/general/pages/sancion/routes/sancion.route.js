export default [
    {
        path: '/general/sancion_list',
        name: 'sancion_list',
        component:()=> import('@/modules/general/pages/sancion/list/sancion_list.vue'),
    },
    {
        path: '/general/sancion_form',
        name: 'sancion_form',
        component:()=> import('@/modules/general/pages/sancion/form/sancion_form.vue'),
    },
]
