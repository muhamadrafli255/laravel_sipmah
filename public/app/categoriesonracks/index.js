$(function () {
    initDatatable()

})

function initDatatable() {
    const dtCategoriesOnRacks = renderDatatable(
        '#dtCategoriesOnRacks',
        '/api/datatables/racks/categories',
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
                data: 'quantity_book', name: 'quantity_book', orderable: true, searchable: true
            },
        ],
        function (data, type, row) {
            const path = 'categories/' + row.id
            let updateBtn = '',
            detailBtn = '',
            deleteBtn = ''

                detailBtn = '<a href="'+ path +'/books" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'
                updateBtn = '<a href="'+ path +'/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-fw fa-edit"></i></a>'
                deleteBtn = '<a href="'+ path +'/delete" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-fw fa-trash"></i></a>'

            content = detailBtn +' '+ updateBtn + ' '+ deleteBtn

            return content
        },
        
        [[ 1, 'asc' ]],
        function(d) {
            if(rackId){
                d.rackId = rackId
            }
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtCategoriesOnRacks, $('#dtCategoriesOnRacks').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtCategoriesOnRacks, $('#dtCategoriesOnRacks').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtCategoriesOnRacks, $('#dtCategoriesOnRacks').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtCategoriesOnRacks, $('#dtCategoriesOnRacks').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtCategoriesOnRacks, $('#dtCategoriesOnRacks').parents('.dt-container').find('.dt-pdf'))
}
