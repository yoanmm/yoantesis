export default [
    {
        path: '/general/juego_delegacion_list',
        name: 'juego_delegacion_list',
        component:()=> import('@/modules/general/pages/juego_delegacion/list/juego_delegacion_list.vue'),
    },
    {
        path: '/general/juego_delegacion_form',
        name: 'juego_delegacion_form',
        component:()=> import('@/modules/general/pages/juego_delegacion/form/juego_delegacion_form.vue'),
    },
]
