  export const columns = [
    {
      title: 'Id',
      dataIndex: 'id_regla_deporte',
      align:'center',
      key: 'id_regla_deporte',

      sorter: (a, b) => a.id_regla_deporte - b.id_regla_deporte
    },
    {
      title: 'Nombre',
      dataIndex: 'nombre_regla',
      align:'center',
      key: 'nombre_regla',

      sorter: (a, b) =>  (a.nombre_regla > b.nombre_regla)-(a.nombre_regla < b.nombre_regla)
    },
    {
      title: 'Campos',
      dataIndex: 'campos',
      align:'center',
      key: 'campos',

      sorter: (a, b) =>  (a.campos > b.campos)-(a.campos < b.campos)
    },
    {
      title: 'Cal campos',
      dataIndex: 'cal_campos',
      align:'center',
      key: 'cal_campos',

      sorter: (a, b) =>  (a.cal_campos > b.cal_campos)-(a.cal_campos < b.cal_campos)
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
