export default [
    {
        path: '/general/cancha_list',
        name: 'cancha_list',
        component:()=> import('@/modules/general/pages/cancha/list/cancha_list.vue'),
    },
    {
        path: '/general/cancha_form',
        name: 'cancha_form',
        component:()=> import('@/modules/general/pages/cancha/form/cancha_form.vue'),
    },
]
