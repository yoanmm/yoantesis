  export const columns = [
    {
      title: 'Inicio',
      dataIndex: 'fecha_inicio',
      align:'center',
      key: 'fecha_inicio',

      sorter: (a, b) => a.fecha_inicio - b.fecha_inicio
    },
    {
      title: 'Hora de Fin',
      dataIndex: 'fecha_fin',
      align:'center',
      key: 'fecha_fin',

      sorter: (a, b) => a.fecha_fin - b.fecha_fin
    },
    {
      title: 'Supervisor',
      dataIndex: 'id_supervisor',
      align: 'center',
      key: 'id_supervisor',
      sorter: (a, b) => a.id_supervisor - b.id_supervisor
    },
    {
      title: 'Competencia',
      dataIndex: 'competencia.id_competencia',
      align:'center',
      key: 'competencia.id_deporte',

      sorter: (a, b) => a.competencia && b.competencia?a.competencia.id_competencia - b.competencia.id_competencia:0
    },
    {
      title: 'Fase',
      dataIndex: 'fase.nombre_fase',
      align:'center',
      key: 'fase.nombre_fase',

      sorter: (a, b) =>  a.fase && b.fase?(a.fase.nombre_fase > b.fase.nombre_fase)-(a.fase.nombre_fase < b.fase.nombre_fase):0
    },
    {
      title: 'Cancha',
      dataIndex: 'cancha.nombre_cancha',
      align:'center',
      key: 'cancha.nombre_cancha',

      sorter: (a, b) =>  a.cancha && b.cancha?(a.cancha.nombre_cancha > b.cancha.nombre_cancha)-(a.cancha.nombre_cancha < b.cancha.nombre_cancha):0
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
