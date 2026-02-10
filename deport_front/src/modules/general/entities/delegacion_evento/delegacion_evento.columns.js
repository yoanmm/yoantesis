  export const columns = [
    {
      title: 'Evento',
      dataIndex: 'evento.nombre_evento',
      align:'center',
      key: 'evento.nombre_evento',

      sorter: (a, b) =>  a.evento && b.evento?(a.evento.nombre_evento > b.evento.nombre_evento)-(a.evento.nombre_evento < b.evento.nombre_evento):0
    },
    {
      title: 'Delegacion',
      dataIndex: 'delegacion.nombre_delegacion',
      align:'center',
      key: 'delegacion.nombre_delegacion',

      sorter: (a, b) =>  a.delegacion && b.delegacion?(a.delegacion.nombre_delegacion > b.delegacion.nombre_delegacion)-(a.delegacion.nombre_delegacion < b.delegacion.nombre_delegacion):0
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
