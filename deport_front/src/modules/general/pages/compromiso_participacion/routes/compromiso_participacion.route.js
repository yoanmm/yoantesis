export default [
    {
        path: '/general/compromiso_participacion_list',
        name: 'compromiso_participacion_list',
        component: () => import('@/modules/general/pages/compromiso_participacion/list/compromiso_participacion_list.vue'),
    },
    {
        path: '/general/compromiso_participacion_form',
        name: 'compromiso_participacion_form',
        component: () => import('@/modules/general/pages/compromiso_participacion/form/compromiso_participacion_form.vue'),
    },
]
