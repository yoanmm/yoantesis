  export const columns = [
    {
      title: 'Fecha',
      dataIndex: 'fecha_sancion',
      align:'center',
      key: 'fecha_sancion',

      sorter: (a, b) => a.fecha_sancion - b.fecha_sancion
    },
    {
      title: 'Razon',
      dataIndex: 'razon',
      align:'center',
      key: 'razon',

      sorter: (a, b) =>  (a.razon > b.razon)-(a.razon < b.razon)
    },
    {
      title: 'Puntos de sancion',
      dataIndex: 'puntos_sancion',
      align:'center',
      key: 'puntos_sancion',

      sorter: (a, b) => a.puntos_sancion - b.puntos_sancion
    },
    {
      title: 'Suspendido',
      dataIndex: 'suspendido',
      align:'center',
      key: 'suspendido',

      sorter: (a, b) => a.suspendido - b.suspendido
    },
    {
      title: 'Juegos suspendidos',
      dataIndex: 'juegos_suspendidos',
      align:'center',
      key: 'juegos_suspendidos',

      sorter: (a, b) => a.juegos_suspendidos - b.juegos_suspendidos
    },
    {
      title: 'Expulsado',
      dataIndex: 'expulsado',
      align:'center',
      key: 'expulsado',

      sorter: (a, b) => a.expulsado - b.expulsado
    },
    {
      title: 'Delegacion',
      dataIndex: 'delegacion.nombre_delegacion',
      align:'center',
      key: 'delegacion.nombre_delegacion',

      sorter: (a, b) =>  a.delegacion && b.delegacion?(a.delegacion.nombre_delegacion > b.delegacion.nombre_delegacion)-(a.delegacion.nombre_delegacion < b.delegacion.nombre_delegacion):0
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
