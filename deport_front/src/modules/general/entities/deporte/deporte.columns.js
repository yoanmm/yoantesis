  export const columns = [
    {
      title: 'Nombre',
      dataIndex: 'nombre_deporte',
      align:'center',
      key: 'nombre_deporte',

      sorter: (a, b) =>  (a.nombre_deporte > b.nombre_deporte)-(a.nombre_deporte < b.nombre_deporte)
    },
    {
      title: 'Max de atletas',
      dataIndex: 'max_atleta',
      align:'center',
      key: 'max_atleta',

      sorter: (a, b) => a.max_atleta - b.max_atleta
    },
    {
      title: 'Min de atletas',
      dataIndex: 'min_atleta',
      align:'center',
      key: 'min_atleta',

      sorter: (a, b) => a.min_atleta - b.min_atleta
    },
    {
      title: 'Icono',
      dataIndex: 'icono_deporte',
      align:'center',
      key: 'icono_deporte',

      sorter: (a, b) =>  (a.icono_deporte > b.icono_deporte)-(a.icono_deporte < b.icono_deporte)
    },
    {
      title: 'Genero',
      dataIndex: 'genero',
      align:'center',
      key: 'genero',

      sorter: (a, b) =>  (a.genero > b.genero)-(a.genero < b.genero)
    },
    {
      title: 'Individual',
      dataIndex: 'individual',
      align:'center',
      key: 'individual',

      sorter: (a, b) => a.individual - b.individual
    },
    {
      title: 'Categoria',
      dataIndex: 'categoria.nombre_categoria',
      align:'center',
      key: 'categoria.nombre_categoria',

      sorter: (a, b) =>  a.categoria && b.categoria?(a.categoria.nombre_categoria > b.categoria.nombre_categoria)-(a.categoria.nombre_categoria < b.categoria.nombre_categoria):0
    },
    {
      title: 'Regla',
      dataIndex: 'regla.nombre_regla',
      align:'center',
      key: 'regla.nombre_regla',

      sorter: (a, b) =>  a.regla && b.regla?(a.regla.nombre_regla > b.regla.nombre_regla)-(a.regla.nombre_regla < b.regla.nombre_regla):0
    },
    {
      title: 'Deporte Padre',
      dataIndex: 'deporte_padre.nombre_deporte',
      align:'center',
      key: 'deporte_padre.nombre_deporte',

      sorter: (a, b) =>  a.reglamento && b.reglamento?(a.reglamento > b.reglamento)-(a.reglamento < b.reglamento):0
    },
    {

      title: 'Reglamento',
      dataIndex: 'reglamento',
      align:'center',
      key: 'reglamento',
      scopedSlots: { customRender: 'reglamento' },

      sorter: (a, b) =>  (a.deporte_padre.nombre_deporte > b.deporte_padre.nombre_deporte)-(a.deporte_padre.nombre_deporte < b.deporte_padre.nombre_deporte)
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
