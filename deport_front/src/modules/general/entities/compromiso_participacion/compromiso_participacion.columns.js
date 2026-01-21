export const columns = [
    {
        title: 'ID Compromiso',
        dataIndex: 'id_compromiso',
        align:'center',
        key: 'id_compromiso',
        sorter: (a, b) => a.id_compromiso - b.id_compromiso
    },
    {
        title: 'Delegación Evento',
        dataIndex: 'delegacion_evento.nombre_delegacion_evento',
        align:'center',
        key: 'delegacion_evento.nombre_delegacion_evento',
        sorter: (a, b) => a.delegacion_evento && b.delegacion_evento ? 
            (a.delegacion_evento.nombre_delegacion_evento > b.delegacion_evento.nombre_delegacion_evento) - 
            (a.delegacion_evento.nombre_delegacion_evento < b.delegacion_evento.nombre_delegacion_evento) : 0
    },
    {
        title: 'Deporte',
        dataIndex: 'deporte.nombre_deporte',
        align:'center',
        key: 'deporte.nombre_deporte',
        sorter: (a, b) => a.deporte && b.deporte ? 
            (a.deporte.nombre_deporte > b.deporte.nombre_deporte) - 
            (a.deporte.nombre_deporte < b.deporte.nombre_deporte) : 0
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