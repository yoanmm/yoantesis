  export const columns = [
    {
      title: 'Id_equipo_atleta',
      dataIndex: 'id_equipo_atleta',
      align:'center',
      key: 'id_equipo_atleta',

      sorter: (a, b) => a.id_equipo_atleta - b.id_equipo_atleta
    },
    {
      title: 'Equipo',
      dataIndex: 'equipo.nombre_equipo',
      align:'center',
      key: 'equipo.nombre_equipo',

      sorter: (a, b) =>  a.equipo && b.equipo?(a.equipo.nombre_equipo > b.equipo.nombre_equipo)-(a.equipo.nombre_equipo < b.equipo.nombre_equipo):0
    },
    {
      title: 'Atleta',
      dataIndex: 'atleta.foto',
      align:'center',
      key: 'atleta.foto',

      sorter: (a, b) =>  a.atleta && b.atleta?(a.atleta.foto > b.atleta.foto)-(a.atleta.foto < b.atleta.foto):0
    },
    {
      title: 'Estado_atleta',
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

      sorter: (a, b) => a.capitan - b.capitan
    },
    {
      title: 'Subcapitan',
      dataIndex: 'subcapitan',
      align:'center',
      key: 'subcapitan',

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
