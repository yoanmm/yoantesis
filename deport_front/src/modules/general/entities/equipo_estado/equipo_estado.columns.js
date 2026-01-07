  export const columns = [
    {
      title: 'Id',
      dataIndex: 'id_estado',
      align:'center',
      key: 'id_estado',

      sorter: (a, b) => a.id_estado - b.id_estado
    },
    {
      title: 'Estado',
      dataIndex: 'estado_equipo',
      align:'center',
      key: 'estado_equipo',

      sorter: (a, b) =>  (a.estado_equipo > b.estado_equipo)-(a.estado_equipo < b.estado_equipo)
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
