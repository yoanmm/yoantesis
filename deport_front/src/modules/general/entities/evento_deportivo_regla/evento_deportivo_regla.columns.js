  export const columns = [
    {
      title: 'Nombre',
      dataIndex: 'nombre_regla',
      align:'center',
      key: 'nombre_regla',

      sorter: (a, b) =>  (a.nombre_regla > b.nombre_regla)-(a.nombre_regla < b.nombre_regla)
    },
    {
      title: 'Regla',
      dataIndex: 'regla',
      align:'center',
      key: 'regla',

      sorter: (a, b) =>  (a.regla > b.regla)-(a.regla < b.regla)
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
