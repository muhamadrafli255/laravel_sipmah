$(function () {
    initDatatable()

})

function initDatatable() {
    const dtOfficer = renderDatatable(
        '#dtOfficer',
        '/api/datatables/officers',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'identifier_number', name:'identifier_number', orderable: true, searchable: true
            },
            {
                data: 'name', name:'name', orderable: true, searchable: true
            },
            {
                data: 'email', name:'email', orderable: true, searchable: true
            },
        ],
        function (data, type, row) {
            const path = 'officers/' + row.id
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
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtOfficer, $('#dtOfficer').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtOfficer, $('#dtOfficer').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtOfficer, $('#dtOfficer').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtOfficer, $('#dtOfficer').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtOfficer, $('#dtMember').parents('.dt-container').find('.dt-pdf'))
}
