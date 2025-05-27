  export const columns = [
    {
      title: 'Nombre_deporte',
      dataIndex: 'nombre_deporte',
      align:'center',
      key: 'nombre_deporte',

      sorter: (a, b) =>  (a.nombre_deporte > b.nombre_deporte)-(a.nombre_deporte < b.nombre_deporte)
    },
    {
      title: 'Max_atleta',
      dataIndex: 'max_atleta',
      align:'center',
      key: 'max_atleta',

      sorter: (a, b) => a.max_atleta - b.max_atleta
    },
    {
      title: 'Min_atleta',
      dataIndex: 'min_atleta',
      align:'center',
      key: 'min_atleta',

      sorter: (a, b) => a.min_atleta - b.min_atleta
    },
    {
      title: 'Icono_deporte',
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
      title: 'Deporte_padre',
      dataIndex: 'deporte_padre.nombre_deporte',
      align:'center',
      key: 'deporte_padre.nombre_deporte',

      sorter: (a, b) =>  a.deporte_padre && b.deporte_padre?(a.deporte_padre.nombre_deporte > b.deporte_padre.nombre_deporte)-(a.deporte_padre.nombre_deporte < b.deporte_padre.nombre_deporte):0
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
