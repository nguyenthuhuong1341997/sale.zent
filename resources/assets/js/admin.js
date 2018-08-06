var table = $('#product-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: url,
    columns: [
        { data: 'id', name: 'id' },
        { data: 'code', name: 'code' },
        { data: 'name', name: 'name' },
        { data: 'name', name: 'name' },
        { data: 'vendor_id', name: 'vendor_id' },
        { data: 'action', name: 'action' },

    ]
});

