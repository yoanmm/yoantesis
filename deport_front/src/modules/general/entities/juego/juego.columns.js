  export const columns = [
    {
      title: 'Inicio',
      dataIndex: 'fecha_inicio',
      align:'center',
      key: 'fecha_inicio',

      sorter: (a, b) => a.fecha_inicio - b.fecha_inicio
    },
    {
      title: 'Fin',
      dataIndex: 'fecha_fin',
      align:'center',
      key: 'fecha_fin',

      sorter: (a, b) => a.fecha_fin - b.fecha_fin
    },
    {
      title: 'Descripcion',
      dataIndex: 'descripcion_juego',
      align:'center',
      key: 'descripcion_juego',

      sorter: (a, b) =>  (a.descripcion_juego > b.descripcion_juego)-(a.descripcion_juego < b.descripcion_juego)
    },
    {
      title: 'Competencia',
      dataIndex: 'competencia.id_competencia',
      align:'center',
      key: 'competencia.id_competencia',

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
