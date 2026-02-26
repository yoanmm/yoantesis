export const columns = [
  {
    title: "Nombre Usuario",
    dataIndex: "username",
    align: "left",
    key: "username",

    sorter: (a, b) => (a.username > b.username) - (a.username < b.username),
  },
  {
    title: 'Contraseña',
    dataIndex: 'password',
    align: 'center',
    key: 'password',

     sorter: (a, b) => (a.password > b.password) - (a.password < b.password),
   },
  {
    title: "Correo",
    dataIndex: "correo",
    align: "center",
    key: "correo",

    sorter: (a, b) => (a.correo > b.correo) - (a.correo < b.correo),
  },
  {
    title: "Creado",
    dataIndex: "creado",
    align: "center",
    key: "creado",

    sorter: (a, b) => a.creado - b.creado,
  },
  {
    title: "Actualizado",
    dataIndex: "actualizado",
    align: "center",
    key: "actualizado",

    sorter: (a, b) => a.actualizado - b.actualizado,
  },
  {
    title: "Activo",
    dataIndex: "activo",
    align: "center",
    key: "activo",

    sorter: (a, b) => a.activo - b.activo,
  },
  {
    title: "Persona",
    dataIndex: "persona.nombre_completo",
    align: "center",
    key: "persona.nombre_completo",
    sorter: (a, b) => (a.persona && b.persona ? a.persona.nombre_completo.localeCompare(b.persona.nombre_completo) : 0),
  },
  {
    title: "Acciones",
    key: "action_elements",
    fixed: "right",
    scopedSlots: {
      customRender: "action",
    },
  },
];
