export default [
    {
        path: '/general/evento_deportivo_list',
        name: 'evento_deportivo_list',
        component:()=> import('@/modules/general/pages/evento_deportivo/list/evento_deportivo_list.vue'),
    },
    {
        path: '/general/evento_deportivo_form',
        name: 'evento_deportivo_form',
        component:()=> import('@/modules/general/pages/evento_deportivo/form/evento_deportivo_form.vue'),
    },
]
