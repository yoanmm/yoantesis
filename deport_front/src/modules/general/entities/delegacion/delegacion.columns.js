  export const columns = [
    {
      title: 'Nombre',
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
      scopedSlots: { customRender: 'mascota' },
      sorter: (a, b) =>  (a.mascota > b.mascota)-(a.mascota < b.mascota)
    },
    {
      title: 'Color',
      dataIndex: 'color',
      align:'center',
      key: 'color',
      scopedSlots: { customRender: 'color' },
      sorter: (a, b) =>  (a.color > b.color)-(a.color < b.color)
    },
    {
      title: 'Logo',
      dataIndex: 'logo',
      align:'center',
      key: 'logo',
      scopedSlots: { customRender: 'logo' },
      sorter: (a, b) =>  (a.logo > b.logo)-(a.logo < b.logo)
    },
    {
      title: 'Tipo',
      dataIndex: 'tipo_delegacion.tipo_delegacion',
      align:'center',
      key: 'tipo_delegacion.tipo_delegacion',

      sorter: (a, b) =>  a.tipo_delegacion && b.tipo_delegacion?(a.tipo_delegacion.tipo_delegacion > b.tipo_delegacion.tipo_delegacion)-(a.tipo_delegacion.tipo_delegacion < b.tipo_delegacion.tipo_delegacion):0
    },
    {
      title: 'Reglamento',
      dataIndex: 'reglamento',
      align:'center',
      key: 'reglamento',
      scopedSlots: { customRender: 'reglamento' },
      sorter: (a, b) =>  (a.reglamento > b.reglamento)-(a.reglamento < b.reglamento)
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
