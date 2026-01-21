  export const columns = [
    {
      title: 'Id',
      dataIndex: 'id_reclamacion',
      align:'center',
      key: 'id_reclamacion',

      sorter: (a, b) => a.id_reclamacion - b.id_reclamacion
    },
    {
      title: 'Fecha',
      dataIndex: 'fecha_reclamacion',
      align:'center',
      key: 'fecha_reclamacion',

      sorter: (a, b) => a.fecha_reclamacion - b.fecha_reclamacion
    },
    {
      title: 'Descripcion',
      dataIndex: 'descripcion_reclamacion',
      align:'center',
      key: 'descripcion_reclamacion',

      sorter: (a, b) =>  (a.descripcion_reclamacion > b.descripcion_reclamacion)-(a.descripcion_reclamacion < b.descripcion_reclamacion)
    },
    {
      title: 'Delegacion',
      dataIndex: 'delegacion.nombre_delegacion',
      align:'center',
      key: 'delegacion.nombre_delegacion',

      sorter: (a, b) =>  a.delegacion && b.delegacion?(a.delegacion.nombre_delegacion > b.delegacion.nombre_delegacion)-(a.delegacion.nombre_delegacion < b.delegacion.nombre_delegacion):0
    },
    {
      title: 'Sancion',
      dataIndex: 'sancion.razon',
      align:'center',
      key: 'sancion.razon',

      sorter: (a, b) =>  a.sancion && b.sancion?(a.sancion.razon > b.sancion.razon)-(a.sancion.razon < b.sancion.razon):0
    },
    {
      title: 'Estado',
      dataIndex: 'estado.nombre_estado',
      align:'center',
      key: 'estado.nombre_estado',

      sorter: (a, b) =>  a.estado && b.estado?(a.estado.nombre_estado > b.estado.nombre_estado)-(a.estado.nombre_estado < b.estado.nombre_estado):0
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
