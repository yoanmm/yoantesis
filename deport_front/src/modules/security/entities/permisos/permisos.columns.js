  export const columns = [
    {
      title: 'Nombre_permiso',
      dataIndex: 'nombre_permiso',
      align:'center',
      key: 'nombre_permiso',

      sorter: (a, b) =>  (a.nombre_permiso > b.nombre_permiso)-(a.nombre_permiso < b.nombre_permiso)
    },
    {
      title: 'Code',
      dataIndex: 'code',
      align:'center',
      key: 'code',

      sorter: (a, b) =>  (a.code > b.code)-(a.code < b.code)
    },
    {
      title: 'Modulo',
      dataIndex: 'modulo',
      align:'center',
      key: 'modulo',

      sorter: (a, b) =>  (a.modulo > b.modulo)-(a.modulo < b.modulo)
    },
    {
      title: 'Controller',
      dataIndex: 'controller',
      align:'center',
      key: 'controller',

      sorter: (a, b) =>  (a.controller > b.controller)-(a.controller < b.controller)
    },
    {
      title: 'Accion',
      dataIndex: 'accion',
      align:'center',
      key: 'accion',

      sorter: (a, b) =>  (a.accion > b.accion)-(a.accion < b.accion)
    },
    {
      title: 'Habilitado',
      dataIndex: 'habilitado',
      align:'center',
      key: 'habilitado',

      sorter: (a, b) => a.habilitado - b.habilitado
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
