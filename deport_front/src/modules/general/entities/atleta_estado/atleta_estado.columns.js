  export const columns = [
    {
      title: 'Estado_atleta',
      dataIndex: 'estado_atleta',
      align:'center',
      key: 'estado_atleta',

      sorter: (a, b) =>  (a.estado_atleta > b.estado_atleta)-(a.estado_atleta < b.estado_atleta)
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
