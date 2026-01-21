  export const columns = [
    {
      title: 'Evento',
      dataIndex: 'evento.nombre_evento',
      align:'center',
      key: 'evento.nombre_evento',

      sorter: (a, b) =>  a.evento && b.evento?(a.evento.nombre_evento > b.evento.nombre_evento)-(a.evento.nombre_evento < b.evento.nombre_evento):0
    },
    {
      title: 'Deporte',
      dataIndex: 'deporte.nombre_deporte',
      align:'center',
      key: 'deporte.nombre_deporte',

      sorter: (a, b) =>  a.deporte && b.deporte?(a.deporte.nombre_deporte > b.deporte.nombre_deporte)-(a.deporte.nombre_deporte < b.deporte.nombre_deporte):0
    },
    {
      title: 'Supervisor',
      dataIndex: 'supervisor.id_supervisor',
      align:'center',
      key: 'supervisor.id_supervisor',

      sorter: (a, b) => a.supervisor && b.supervisor?a.supervisor.id_supervisor - b.supervisor.id_supervisor:0
    },
    {
      title: 'Resultado',
      dataIndex: 'resultado_competencia',
      align:'center',
      key: 'resultado_competencia',

      sorter: (a, b) =>  (a.resultado_competencia > b.resultado_competencia)-(a.resultado_competencia < b.resultado_competencia)
    },
    {
      title: 'Terminado',
      dataIndex: 'terminado',
      align:'center',
      key: 'terminado',

      sorter: (a, b) => a.terminado - b.terminado
    },
    {
      title: 'Fin_inscripcion',
      dataIndex: 'fin_inscripcion',
      align:'center',
      key: 'fin_inscripcion',

      sorter: (a, b) => a.fin_inscripcion - b.fin_inscripcion
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
