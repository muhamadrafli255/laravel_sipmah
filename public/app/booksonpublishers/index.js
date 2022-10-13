$(function () {
    initDatatable()

})

function initDatatable() {
    const dtBooksOnPublishers = renderDatatable(
        '#dtBooksOnPublishers',
        '/api/datatables/publishers/books',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'image', name: 'image', orderable: true, searchable: true
            },
            {
                data: 'title', name: 'title', orderable: true, searchable: true
            },
        ],
        function (data, type, row) {
            const path = 'books/' + row.id
            let updateBtn = '',
            detailBtn = '',
            deleteBtn = ''

                detailBtn = '<a href="'+ path +'" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'
                updateBtn = '<a href="'+ path +'/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-fw fa-edit"></i></a>'
                deleteBtn = '<a href="'+ path +'/delete" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-fw fa-trash"></i></a>'

            content = detailBtn +' '+ updateBtn + ' '+ deleteBtn

            return content
        },
        
        [[ 1, 'asc' ]],
        function(d) {
            if(publisher_id){
                d.publisher_id = publisher_id
            }
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtBooksOnPublishers, $('#dtBooksOnPublishers').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtBooksOnPublishers, $('#dtBooksOnPublishers').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtBooksOnPublishers, $('#dtBooksOnPublishers').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtBooksOnPublishers, $('#dtBooksOnPublishers').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtBooksOnPublishers, $('#dtBooksOnPublishers').parents('.dt-container').find('.dt-pdf'))
}
