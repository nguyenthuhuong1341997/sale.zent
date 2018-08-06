var table = $('#color-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: 'color/getlist',
    orders: [],
    columns: [
        { data: 'id', name: 'id' },
        { data: 'color_name', name: 'color_name' },
        { data: 'color', name: 'color' },
        { data: 'action', name: 'action' },
    ]
});