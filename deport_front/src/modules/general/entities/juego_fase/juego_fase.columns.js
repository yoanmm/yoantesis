  export const columns = [
    {
      title: 'Nombre',
      dataIndex: 'nombre_fase',
      align:'center',
      key: 'nombre_fase',

      sorter: (a, b) =>  (a.nombre_fase > b.nombre_fase)-(a.nombre_fase < b.nombre_fase)
    },
    {
      title: 'Final',
      dataIndex: 'es_final',
      align:'center',
      key: 'es_final',

      sorter: (a, b) => a.es_final - b.es_final
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
