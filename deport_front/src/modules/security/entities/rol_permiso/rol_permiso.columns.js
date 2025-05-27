  export const columns = [
    {
      title: 'Rol',
      dataIndex: 'rol.nombre_rol',
      align:'center',
      key: 'rol.nombre_rol',

      sorter: (a, b) =>  a.rol && b.rol?(a.rol.nombre_rol > b.rol.nombre_rol)-(a.rol.nombre_rol < b.rol.nombre_rol):0
    },
    {
      title: 'Permiso',
      dataIndex: 'permiso.nombre_permiso',
      align:'center',
      key: 'permiso.nombre_permiso',

      sorter: (a, b) =>  a.permiso && b.permiso?(a.permiso.nombre_permiso > b.permiso.nombre_permiso)-(a.permiso.nombre_permiso < b.permiso.nombre_permiso):0
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
