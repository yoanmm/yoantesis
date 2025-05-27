export default [
    {
        path: '/general/congresillo_asistencia_list',
        name: 'congresillo_asistencia_list',
        component:()=> import('@/modules/general/pages/congresillo_asistencia/list/congresillo_asistencia_list.vue'),
    },
    {
        path: '/general/congresillo_asistencia_form',
        name: 'congresillo_asistencia_form',
        component:()=> import('@/modules/general/pages/congresillo_asistencia/form/congresillo_asistencia_form.vue'),
    },
]
