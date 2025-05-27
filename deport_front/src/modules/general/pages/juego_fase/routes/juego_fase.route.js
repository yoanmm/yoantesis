export default [
    {
        path: '/general/juego_fase_list',
        name: 'juego_fase_list',
        component:()=> import('@/modules/general/pages/juego_fase/list/juego_fase_list.vue'),
    },
    {
        path: '/general/juego_fase_form',
        name: 'juego_fase_form',
        component:()=> import('@/modules/general/pages/juego_fase/form/juego_fase_form.vue'),
    },
]
