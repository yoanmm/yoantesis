  export const columns = [
    {
      title: 'Nombre',
      dataIndex: 'nombre_evento',
      align:'center',
      key: 'nombre_evento',

      sorter: (a, b) =>  (a.nombre_evento > b.nombre_evento)-(a.nombre_evento < b.nombre_evento)
    },
    {
      title: 'Descripcion',
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
      title: 'Inicio',
      dataIndex: 'fecha_inicio',
      align:'center',
      key: 'fecha_inicio',

      sorter: (a, b) => a.fecha_inicio - b.fecha_inicio
    },
    {
      title: 'Fin',
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
      title: 'Edicion',
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
      scopedSlots: {customRender: 'terminado'},

      sorter: (a, b) => a.terminado - b.terminado
    },
    {
      title: 'Resultado',
      dataIndex: 'resultado_edicion',
      align:'center',
      key: 'resultado_edicion',

      sorter: (a, b) =>  (a.resultado_edicion > b.resultado_edicion)-(a.resultado_edicion < b.resultado_edicion)
    },
    {
      title: 'Descripcion delegaciones',
      dataIndex: 'descripcion_delegaciones',
      align:'center',
      key: 'descripcion_delegaciones',

      sorter: (a, b) =>  (a.descripcion_delegaciones > b.descripcion_delegaciones)-(a.descripcion_delegaciones < b.descripcion_delegaciones)
    },
    {

      title: 'Reglamento',
      dataIndex: 'reglamento',
      align:'center',
      key: 'reglamento',
      scopedSlots: { customRender: 'reglamento' },

      sorter: (a, b) =>  (a.deporte_padre.nombre_deporte > b.deporte_padre.nombre_deporte)-(a.deporte_padre.nombre_deporte < b.deporte_padre.nombre_deporte)
    },
    {
      title: 'Regla',
      dataIndex: 'regla_evento.nombre_regla',
      align:'center',
      key: 'regla_evento.nombre_regla',

      sorter: (a, b) =>  a.regla_evento && b.regla_evento?(a.regla_evento.nombre_regla > b.regla_evento.nombre_regla)-(a.regla_evento.nombre_regla < b.regla_evento.nombre_regla):0
    },
    {
      title: 'Acciones',
      key: 'action_elements',
      fixed: 'right',
      scopedSlots: {customRender: 'action'}
    }
  ];
