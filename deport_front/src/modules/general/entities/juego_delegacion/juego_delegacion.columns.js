  export const columns = [
    {
      title: 'Juego',
      dataIndex: 'juego.descripcion_juego',
      align:'center',
      key: 'juego.descripcion_juego',

      sorter: (a, b) =>  a.juego && b.juego?(a.juego.descripcion_juego > b.juego.descripcion_juego)-(a.juego.descripcion_juego < b.juego.descripcion_juego):0
    },
    {
      title: 'Delegacion',
      dataIndex: 'delegacion.nombre_delegacion',
      align:'center',
      key: 'delegacion.nombre_delegacion',

      sorter: (a, b) =>  a.delegacion && b.delegacion?(a.delegacion.nombre_delegacion > b.delegacion.nombre_delegacion)-(a.delegacion.nombre_delegacion < b.delegacion.nombre_delegacion):0
    },
    {
      title: 'Resultados',
      dataIndex: 'resultados',
      align:'center',
      key: 'resultados',

      sorter: (a, b) =>  (a.resultados > b.resultados)-(a.resultados < b.resultados)
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
