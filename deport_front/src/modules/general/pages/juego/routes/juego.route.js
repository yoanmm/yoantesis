export default [
    {
        path: '/general/juego_list',
        name: 'juego_list',
        component:()=> import('@/modules/general/pages/juego/list/juego_list.vue'),
    },
    {
        path: '/general/juego_form',
        name: 'juego_form',
        component:()=> import('@/modules/general/pages/juego/form/juego_form.vue'),
    },
]
