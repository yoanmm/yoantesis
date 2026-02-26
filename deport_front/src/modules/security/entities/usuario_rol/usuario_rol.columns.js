  export const columns = [
    {
      title: 'Usuarios',
      dataIndex: 'usuario.username',
      align:'center',
      key: 'usuario.username',

      sorter: (a, b) =>  a.usuario && b.usuario?(a.usuario.username > b.usuario.username)-(a.usuario.username < b.usuario.username):0
    },
    {
      title: 'Roles',
      dataIndex: 'rol.nombre_rol',
      align:'center',
      key: 'rol.nombre_rol',

      sorter: (a, b) =>  a.rol && b.rol?(a.rol.nombre_rol > b.rol.nombre_rol)-(a.rol.nombre_rol < b.rol.nombre_rol):0
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
