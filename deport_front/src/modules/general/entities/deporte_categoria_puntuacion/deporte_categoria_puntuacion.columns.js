  export const columns = [
    {
      title: 'Nombre',
      dataIndex: 'nombre_categoria',
      align:'center',
      key: 'nombre_categoria',

      sorter: (a, b) =>  (a.nombre_categoria > b.nombre_categoria)-(a.nombre_categoria < b.nombre_categoria)
    },
    {
      title: 'Puntos',
      dataIndex: 'puntos',
      align:'center',
      key: 'puntos',

      sorter: (a, b) =>  (a.puntos > b.puntos)-(a.puntos < b.puntos)
    },
    {
      title: 'Acciones',
      key: 'action_elements',
      fixed: 'right',
      scopedSlots: {
        customRender: 'action'
      }
    }
  ];
