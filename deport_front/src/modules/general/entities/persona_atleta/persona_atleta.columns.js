  export const columns = [
    {
      title: 'Persona',
      dataIndex: 'persona.nombre',
      align:'center',
      key: 'persona.nombre',

      sorter: (a, b) =>  a.persona && b.persona?(a.persona.nombre > b.persona.nombre)-(a.persona.nombre < b.persona.nombre):0
    },
    {
      title: 'Tipo',
      dataIndex: 'tipo.tipo_atleta',
      align:'center',
      key: 'tipo.tipo_atleta',

      sorter: (a, b) =>  a.tipo && b.tipo?(a.tipo.tipo_atleta > b.tipo.tipo_atleta)-(a.tipo.tipo_atleta < b.tipo.tipo_atleta):0
    },
    {
      title: 'Foto',
      dataIndex: 'foto',
      align:'center',
      key: 'foto',

      sorter: (a, b) =>  (a.foto > b.foto)-(a.foto < b.foto)
    },
    {
      title: 'Tamaño',
      dataIndex: 'tamaño',
      align:'center',
      key: 'tamaño',

      sorter: (a, b) => a.tamaño - b.tamaño
    },
    {
      title: 'Peso',
      dataIndex: 'peso',
      align:'center',
      key: 'peso',

      sorter: (a, b) => a.peso - b.peso
    },
    {
      title: 'Facultad',
      dataIndex: 'facultad',
      align:'center',
      key: 'facultad',

      sorter: (a, b) =>  (a.facultad > b.facultad)-(a.facultad < b.facultad)
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
