  export const columns = [
    {
      title: 'Nombre_delegacion',
      dataIndex: 'nombre_delegacion',
      align:'center',
      key: 'nombre_delegacion',

      sorter: (a, b) =>  (a.nombre_delegacion > b.nombre_delegacion)-(a.nombre_delegacion < b.nombre_delegacion)
    },
    {
      title: 'Abreviatura',
      dataIndex: 'abreviatura',
      align:'center',
      key: 'abreviatura',

      sorter: (a, b) =>  (a.abreviatura > b.abreviatura)-(a.abreviatura < b.abreviatura)
    },
    {
      title: 'Mascota',
      dataIndex: 'mascota',
      align:'center',
      key: 'mascota',

      sorter: (a, b) =>  (a.mascota > b.mascota)-(a.mascota < b.mascota)
    },
    {
      title: 'Color',
      dataIndex: 'color',
      align:'center',
      key: 'color',

      sorter: (a, b) =>  (a.color > b.color)-(a.color < b.color)
    },
    {
      title: 'Logo',
      dataIndex: 'logo',
      align:'center',
      key: 'logo',

      sorter: (a, b) =>  (a.logo > b.logo)-(a.logo < b.logo)
    },
    {
      title: 'Tipo_delegacion',
      dataIndex: 'tipo_delegacion.tipo_delegacion',
      align:'center',
      key: 'tipo_delegacion.tipo_delegacion',

      sorter: (a, b) =>  a.tipo_delegacion && b.tipo_delegacion?(a.tipo_delegacion.tipo_delegacion > b.tipo_delegacion.tipo_delegacion)-(a.tipo_delegacion.tipo_delegacion < b.tipo_delegacion.tipo_delegacion):0
    },
    {
      title: 'Regla_delegacion',
      dataIndex: 'regla_delegacion.nombre_regla',
      align:'center',
      key: 'regla_delegacion.nombre_regla',

      sorter: (a, b) =>  a.regla_delegacion && b.regla_delegacion?(a.regla_delegacion.nombre_regla > b.regla_delegacion.nombre_regla)-(a.regla_delegacion.nombre_regla < b.regla_delegacion.nombre_regla):0
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
