  export const columns = [
    {
      title: 'Persona',
      dataIndex: 'persona.nombre_completo',
      align:'center',
      key: 'persona.nombre',

      sorter: (a, b) =>  a.persona && b.persona?(a.persona.nombre > b.persona.nombre)-(a.persona.nombre < b.persona.nombre):0
    },
    {
      title: 'Deporte',
      dataIndex: 'deporte.nombre_deporte',
      align:'center',
      key: 'deporte.nombre_deporte',

      sorter: (a, b) =>  a.deporte && b.deporte?(a.deporte.nombre_deporte > b.deporte.nombre_deporte)-(a.deporte.nombre_deporte < b.deporte.nombre_deporte):0
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
