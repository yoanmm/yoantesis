  export const columns = [
    {
      title: 'Fecha_congresillo',
      dataIndex: 'fecha_congresillo',
      align:'center',
      key: 'fecha_congresillo',

      sorter: (a, b) => a.fecha_congresillo - b.fecha_congresillo
    },
    {
      title: 'Competencia',
      dataIndex: 'competencia.id_competencia',
      align:'center',
      key: 'competencia.id_competencia',

      sorter: (a, b) => a.competencia && b.competencia?a.competencia.id_competencia - b.competencia.id_competencia:0
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
