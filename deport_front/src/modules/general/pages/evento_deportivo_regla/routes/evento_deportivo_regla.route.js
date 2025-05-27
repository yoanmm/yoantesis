export default [
    {
        path: '/general/evento_deportivo_regla_list',
        name: 'evento_deportivo_regla_list',
        component:()=> import('@/modules/general/pages/evento_deportivo_regla/list/evento_deportivo_regla_list.vue'),
    },
    {
        path: '/general/evento_deportivo_regla_form',
        name: 'evento_deportivo_regla_form',
        component:()=> import('@/modules/general/pages/evento_deportivo_regla/form/evento_deportivo_regla_form.vue'),
    },
]
