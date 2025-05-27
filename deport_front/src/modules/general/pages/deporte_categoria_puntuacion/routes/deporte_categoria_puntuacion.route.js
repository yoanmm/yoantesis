export default [
    {
        path: '/general/deporte_categoria_puntuacion_list',
        name: 'deporte_categoria_puntuacion_list',
        component:()=> import('@/modules/general/pages/deporte_categoria_puntuacion/list/deporte_categoria_puntuacion_list.vue'),
    },
    {
        path: '/general/deporte_categoria_puntuacion_form',
        name: 'deporte_categoria_puntuacion_form',
        component:()=> import('@/modules/general/pages/deporte_categoria_puntuacion/form/deporte_categoria_puntuacion_form.vue'),
    },
]
