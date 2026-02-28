  export const columns = [
    {
      title: 'Persona',
      dataIndex: 'persona.nombre_completo',
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
      title: 'Acciones',
      key: 'action_elements',
      fixed: 'right',
      scopedSlots: {
        customRender: 'action'
      }
    }
  ];
