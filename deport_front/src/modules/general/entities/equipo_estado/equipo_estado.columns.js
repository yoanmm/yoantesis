  export const columns = [
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
