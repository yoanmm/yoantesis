  export const columns = [
    {
      title: 'Representante',
      dataIndex: 'representante',
      align:'center',
      key: 'representante',

      sorter: (a, b) =>  (a.representante > b.representante)-(a.representante < b.representante)
    },
    {
      title: 'Delegacion',
      dataIndex: 'delegacion.nombre_delegacion',
      align:'center',
      key: 'delegacion.nombre_delegacion',

      sorter: (a, b) =>  a.delegacion && b.delegacion?(a.delegacion.nombre_delegacion > b.delegacion.nombre_delegacion)-(a.delegacion.nombre_delegacion < b.delegacion.nombre_delegacion):0
    },
    {
      title: 'Congresillo',
      dataIndex: 'congresillo.id_congresillo',
      align:'center',
      key: 'congresillo.id_congresillo',

      sorter: (a, b) => a.congresillo && b.congresillo?a.congresillo.id_congresillo - b.congresillo.id_congresillo:0
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
