  export const columns = [
    {
      title: 'Equipo',
      dataIndex: 'equipo.nombre_equipo',
      align:'center',
      key: 'equipo.nombre_equipo',

      sorter: (a, b) =>  a.equipo && b.equipo?(a.equipo.nombre_equipo > b.equipo.nombre_equipo)-(a.equipo.nombre_equipo < b.equipo.nombre_equipo):0
    },
    {
      title: 'Atleta',
      dataIndex: 'atleta.id_atleta',
      align:'center',
      key: 'atleta.id_atleta',

      sorter: (a, b) =>  a.atleta && b.atleta?(a.atleta.nombre > b.atleta.nombre)-(a.atleta.nombre < b.atleta.nombre):0
    },
    {
      title: 'Estado',
      dataIndex: 'estado_atleta.estado_atleta',
      align:'center',
      key: 'estado_atleta.estado_atleta',

      sorter: (a, b) =>  a.estado_atleta && b.estado_atleta?(a.estado_atleta.estado_atleta > b.estado_atleta.estado_atleta)-(a.estado_atleta.estado_atleta < b.estado_atleta.estado_atleta):0
    },
    {
      title: 'Capitan',
      dataIndex: 'capitan',
      align:'center',
      key: 'capitan',
      scopedSlots: { customRender: 'capitan' },
      sorter: (a, b) => a.capitan - b.capitan
    },
    {
      title: 'Subcapitan',
      dataIndex: 'subcapitan',
      align:'center',
      key: 'subcapitan',
      scopedSlots: { customRender: 'subcapitan' },
      sorter: (a, b) => a.subcapitan - b.subcapitan
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
