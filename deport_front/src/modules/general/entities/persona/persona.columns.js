  export const columns = [
    {
      title: 'Nombre',
      dataIndex: 'nombre',
      align:'center',
      key: 'nombre',

      sorter: (a, b) =>  (a.nombre > b.nombre)-(a.nombre < b.nombre)
    },
    {
      title: 'Apellido',
      dataIndex: 'apellido',
      align:'center',
      key: 'apellido',

      sorter: (a, b) =>  (a.apellido > b.apellido)-(a.apellido < b.apellido)
    },
    {
      title: 'Carnet',
      dataIndex: 'carnet',
      align:'center',
      key: 'carnet',

      sorter: (a, b) =>  (a.carnet > b.carnet)-(a.carnet < b.carnet)
    },
    {
      title: 'Genero',
      dataIndex: 'genero',
      align:'center',
      key: 'genero',

      sorter: (a, b) =>  (a.genero > b.genero)-(a.genero < b.genero)
    },
    {
      title: 'Acciones',
      key: 'action_elements',
      fixed: 'right',
      scopedSlots: {
        customRender: 'action'
      }
    },
    {
      title: 'Facultad',
      dataIndex: 'facultad',
      align:'center',
      key: 'facultad',

      sorter: (a, b) =>  (a.facultad > b.facultad)-(a.facultad < b.facultad)
    }
  ];
