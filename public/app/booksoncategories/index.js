$(function () {
    initDatatable()

})

function initDatatable() {
    const dtBookOnCategory = renderDatatable(
        '#dtBookOnCategory',
        '/api/datatables/categories/books',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'image', name: 'image', orderable: false, searchable: false,
                render: function(data, type,){
                    const imagePath = "/img/book-images/";
                    return '<img src="'+ imagePath +'' + data +'" class="rounded" height="350px" width="200px"/>'
                }
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
            if(categoryId){
                d.categoryId = categoryId
            }
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtBookOnCategory, $('#dtBookOnCategory').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtBookOnCategory, $('#dtBookOnCategory').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtBookOnCategory, $('#dtBookOnCategory').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtBookOnCategory, $('#dtBookOnCategory').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtBookOnCategory, $('#dtBookOnCategory').parents('.dt-container').find('.dt-pdf'))
}
