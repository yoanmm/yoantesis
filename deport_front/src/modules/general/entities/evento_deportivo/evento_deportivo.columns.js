  export const columns = [
    {
      title: 'Nombre_evento',
      dataIndex: 'nombre_evento',
      align:'center',
      key: 'nombre_evento',

      sorter: (a, b) =>  (a.nombre_evento > b.nombre_evento)-(a.nombre_evento < b.nombre_evento)
    },
    {
      title: 'Descripcion_evento',
      dataIndex: 'descripcion_evento',
      align:'center',
      key: 'descripcion_evento',

      sorter: (a, b) =>  (a.descripcion_evento > b.descripcion_evento)-(a.descripcion_evento < b.descripcion_evento)
    },
    {
      title: 'Logo',
      dataIndex: 'logo',
      align:'center',
      key: 'logo',

      sorter: (a, b) =>  (a.logo > b.logo)-(a.logo < b.logo)
    },
    {
      title: 'Fecha_inicio',
      dataIndex: 'fecha_inicio',
      align:'center',
      key: 'fecha_inicio',

      sorter: (a, b) => a.fecha_inicio - b.fecha_inicio
    },
    {
      title: 'Fecha_fin',
      dataIndex: 'fecha_fin',
      align:'center',
      key: 'fecha_fin',

      sorter: (a, b) => a.fecha_fin - b.fecha_fin
    },
    {
      title: 'Curso',
      dataIndex: 'curso',
      align:'center',
      key: 'curso',

      sorter: (a, b) =>  (a.curso > b.curso)-(a.curso < b.curso)
    },
    {
      title: 'Edicion_evento',
      dataIndex: 'edicion_evento',
      align:'center',
      key: 'edicion_evento',

      sorter: (a, b) =>  (a.edicion_evento > b.edicion_evento)-(a.edicion_evento < b.edicion_evento)
    },
    {
      title: 'Terminado',
      dataIndex: 'terminado',
      align:'center',
      key: 'terminado',

      sorter: (a, b) => a.terminado - b.terminado
    },
    {
      title: 'Resultado_edicion',
      dataIndex: 'resultado_edicion',
      align:'center',
      key: 'resultado_edicion',

      sorter: (a, b) =>  (a.resultado_edicion > b.resultado_edicion)-(a.resultado_edicion < b.resultado_edicion)
    },
    {
      title: 'Descripcion_delegaciones',
      dataIndex: 'descripcion_delegaciones',
      align:'center',
      key: 'descripcion_delegaciones',

      sorter: (a, b) =>  (a.descripcion_delegaciones > b.descripcion_delegaciones)-(a.descripcion_delegaciones < b.descripcion_delegaciones)
    },
    {
      title: 'Regla_evento',
      dataIndex: 'regla_evento.nombre_regla',
      align:'center',
      key: 'regla_evento.nombre_regla',

      sorter: (a, b) =>  a.regla_evento && b.regla_evento?(a.regla_evento.nombre_regla > b.regla_evento.nombre_regla)-(a.regla_evento.nombre_regla < b.regla_evento.nombre_regla):0
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
