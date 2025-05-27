  export const columns = [
    {
      title: 'Id',
      dataIndex: 'id',
      align:'center',
      key: 'id',

      sorter: (a, b) => a.id - b.id
    },
    {
      title: 'Nombre_accion',
      dataIndex: 'nombre_accion',
      align:'center',
      key: 'nombre_accion',

      sorter: (a, b) =>  (a.nombre_accion > b.nombre_accion)-(a.nombre_accion < b.nombre_accion)
    },
    {
      title: 'Tabla',
      dataIndex: 'tabla',
      align:'center',
      key: 'tabla',

      sorter: (a, b) =>  (a.tabla > b.tabla)-(a.tabla < b.tabla)
    },
    {
      title: 'Record',
      dataIndex: 'record',
      align:'center',
      key: 'record',

      sorter: (a, b) =>  (a.record > b.record)-(a.record < b.record)
    },
    {
      title: 'Ip',
      dataIndex: 'ip',
      align:'center',
      key: 'ip',

      sorter: (a, b) =>  (a.ip > b.ip)-(a.ip < b.ip)
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
      title: 'Usuario',
      dataIndex: 'usuario.username',
      align:'center',
      key: 'usuario.username',

      sorter: (a, b) =>  a.usuario && b.usuario?(a.usuario.username > b.usuario.username)-(a.usuario.username < b.usuario.username):0
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
