$(function () {
    initDatatable()

})

function initDatatable() {
    const dtBorrows = renderDatatable(
        '#dtBorrows',
        '/api/datatables/borrows',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'book_title', name: 'book_title', orderable: true, searchable: true
            },
            {
                data: 'borrower_name', name: 'borrower_name', orderable: true, searchable: true
            },
            {
                data: 'officer_name', name: 'officer_name', orderable: true, searchable: true
            },
            {
                data: 'borrow_date', name: 'borrow_date', orderable: true, searchable: true
            },
            {
                data: 'status_borrow', name: 'status_borrow', orderable: true, searchable: true,
                render: function(data, type, row){
                    statusBadge = '<span class="badge badge-warning">Sedang Dipinjam</span>';
                    if(data != 1){
                        statusBadge = '<span class="badge badge-success">Sudah Dikembalikan</span>'; 
                    }

                    return statusBadge;
                }
            },
        ],
        function (data, type, row) {
            const status = row.status_borrow
            const path = 'borrows/' + row.id
            let updateBtn = '',
            detailBtn = '',
            deleteBtn = ''
                    if(status == 2){
                        detailBtn = '<a href="'+ path +'" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'
                    }else{
                        detailBtn = '<a href="'+ path +'" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'
                        updateBtn = '<a href="'+ path +'/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-fw fa-edit"></i></a>'
                        deleteBtn = '<a href="'+ path +'/return" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Pengembalian"><i class="fas fa-fw fa-rotate-left"></i></a>'
                    }

            content = detailBtn +' '+ updateBtn + ' '+ deleteBtn

            return content
        },
        
        [[ 1, 'asc' ]],
        function(d) {
            if(role_id && auth){
                d.role_id = role_id,
                d.auth = auth
            }
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtBorrows, $('#dtBorrows').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtBorrows, $('#dtBorrows').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtBorrows, $('#dtBorrows').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtBorrows, $('#dtBorrows').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtBorrows, $('#dtBorrows').parents('.dt-container').find('.dt-pdf'))
}