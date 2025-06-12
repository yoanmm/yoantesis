  export const columns = [
    {
      title: 'Nombre',
      dataIndex: 'nombre_cancha',
      align:'center',
      key: 'nombre_cancha',

      sorter: (a, b) =>  (a.nombre_cancha > b.nombre_cancha)-(a.nombre_cancha < b.nombre_cancha)
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
