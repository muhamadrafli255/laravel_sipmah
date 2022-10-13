$(function () {
    initDatatable()

})

function initDatatable() {
    const dtPublishers = renderDatatable(
        '#dtPublishers',
        '/api/datatables/publishers',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'name', name: 'name', orderable: true, searchable: true
            },
            {
                data: 'address', name: 'address', orderable: true, searchable: true
            },
            {
                data: 'email', name: 'email', orderable: true, searchable: true
            },
            {
                data: 'phone', name: 'phone', orderable: true, searchable: true
            },
            {
                data: 'quantity_book', name: 'quantity_book', orderable: true, searchable: true
            },
        ],
        function (data, type, row) {
            const role = role_id
            const path = 'publishers/' + row.id
            let updateBtn = '',
            detailBtn = '',
            deleteBtn = ''

                if(role == 3){
                    detailBtn = '<a href="'+ path +'" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'
                }else{
                    detailBtn = '<a href="'+ path +'/books" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'
                    updateBtn = '<a href="'+ path +'/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-fw fa-edit"></i></a>'
                    deleteBtn = '<a href="'+ path +'/delete" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-fw fa-trash"></i></a>'
                }

            content = detailBtn +' '+ updateBtn + ' '+ deleteBtn

            return content
        },
        
        [[ 1, 'asc' ]],
        function(d) {
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtPublishers, $('#dtPublishers').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtPublishers, $('#dtPublishers').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtPublishers, $('#dtPublishers').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtPublishers, $('#dtPublishers').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtPublishers, $('#dtPublishers').parents('.dt-container').find('.dt-pdf'))
}
