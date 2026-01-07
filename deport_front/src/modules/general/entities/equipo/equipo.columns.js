  export const columns = [
    {
      title: 'Nombre',
      dataIndex: 'nombre_equipo',
      align:'center',
      key: 'nombre_equipo',

      sorter: (a, b) =>  (a.nombre_equipo > b.nombre_equipo)-(a.nombre_equipo < b.nombre_equipo)
    },
    {
      title: 'Competencia',
      dataIndex: 'competencia.id_competencia',
      align:'center',
      key: 'competencia.id_competencia',

      sorter: (a, b) => a.competencia && b.competencia?a.competencia.id_competencia - b.competencia.id_competencia:0
    },
    {
      title: 'Delegacion',
      dataIndex: 'delegacion.nombre_delegacion',
      align:'center',
      key: 'delegacion.nombre_delegacion',

      sorter: (a, b) =>  a.delegacion && b.delegacion?(a.delegacion.nombre_delegacion > b.delegacion.nombre_delegacion)-(a.delegacion.nombre_delegacion < b.delegacion.nombre_delegacion):0
    },
    {
      title: 'Estado',
      dataIndex: 'estado.estado_equipo',
      align:'center',
      key: 'estado.estado_equipo',

      sorter: (a, b) =>  a.estado && b.estado?(a.estado.estado_equipo > b.estado.estado_equipo)-(a.estado.estado_equipo < b.estado.estado_equipo):0
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
