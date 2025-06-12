  export const columns = [
    {
      title: 'Tipos de delegación',
      dataIndex: 'tipo_delegacion',
      align:'center',
      key: 'tipo_delegacion',

      sorter: (a, b) =>  (a.tipo_delegacion > b.tipo_delegacion)-(a.tipo_delegacion < b.tipo_delegacion)
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
