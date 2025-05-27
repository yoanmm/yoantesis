  export const columns = [
    {
      title: 'Nombre_rol',
      dataIndex: 'nombre_rol',
      align:'center',
      key: 'nombre_rol',

      sorter: (a, b) =>  (a.nombre_rol > b.nombre_rol)-(a.nombre_rol < b.nombre_rol)
    },
    {
      title: 'Activo',
      dataIndex: 'activo',
      align:'center',
      key: 'activo',

      sorter: (a, b) => a.activo - b.activo
    },
    {
      title: 'Creado',
      dataIndex: 'creado',
      align:'center',
      key: 'creado',

      sorter: (a, b) => a.creado - b.creado
    },
    {
      title: 'Actualizado',
      dataIndex: 'actualizado',
      align:'center',
      key: 'actualizado',

      sorter: (a, b) => a.actualizado - b.actualizado
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
