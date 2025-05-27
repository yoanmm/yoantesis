  export const columns = [
    {
      title: 'Nombre_estado',
      dataIndex: 'nombre_estado',
      align:'center',
      key: 'nombre_estado',

      sorter: (a, b) =>  (a.nombre_estado > b.nombre_estado)-(a.nombre_estado < b.nombre_estado)
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
