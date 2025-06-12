  export const columns = [
    {
      title: 'Tipo',
      dataIndex: 'tipo_atleta',
      align:'center',
      key: 'tipo_atleta',

      sorter: (a, b) =>  (a.tipo_atleta > b.tipo_atleta)-(a.tipo_atleta < b.tipo_atleta)
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
