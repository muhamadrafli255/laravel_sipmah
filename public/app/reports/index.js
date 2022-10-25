$(function () {
    initDatatable()

})

function initDatatable() {
    const dtReportBorrows = renderDatatable(
        '#dtReportBorrows',
        '/api/datatables/report/borrows',
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
                data: 'estimated_return', name: 'estimated_return', orderable: true, searchable: true
            },
        ],
        function (data, type, row) {
            const path = 'reports/' + row.id
            let updateBtn = '',
            detailBtn = '',
            deleteBtn = ''

                        detailBtn = '<a href="'+ path +'/borrowed" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'

            content = detailBtn +' '+ updateBtn + ' '+ deleteBtn

            return content
        },
        
        [[ 1, 'asc' ]],
        function(d) {
            if(startDate &&  endDate){
                d.startDate = startDate,
                d.endDate   =   endDate
            }
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtReportBorrows, $('#dtReportBorrows').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtReportBorrows, $('#dtReportBorrows').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtReportBorrows, $('#dtReportBorrows').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtReportBorrows, $('#dtReportBorrows').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtReportBorrows, $('#dtReportBorrows').parents('.dt-container').find('.dt-pdf'))

    const dtReportDamaged = renderDatatable(
        '#dtReportDamaged',
        '/api/datatables/report/damaged',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'book_code', name: 'book_code', orderable: true, searchable: true
            },
            {
                data: 'book_title', name: 'book_title', orderable: true, searchable: true
            },
            {
                data: 'borrower_name', name: 'borrower_name', orderable: true, searchable: true
            },
            {
                data: 'return_date', name: 'return_date', orderable: true, searchable: true
            },
        ],
        function (data, type, row) {
            const path = 'reports/' + row.id
            let updateBtn = '',
            detailBtn = '',
            deleteBtn = ''

                        detailBtn = '<a href="'+ path +'/damaged" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'

            content = detailBtn +' '+ updateBtn + ' '+ deleteBtn

            return content
        },
        
        [[ 1, 'asc' ]],
        function(d) {
            if(startDate &&  endDate){
                d.startDate = startDate,
                d.endDate   =   endDate
            }
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtReportDamaged, $('#dtReportDamaged').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtReportDamaged, $('#dtReportDamaged').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtReportDamaged, $('#dtReportDamaged').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtReportDamaged, $('#dtReportDamaged').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtReportDamaged, $('#dtReportDamaged').parents('.dt-container').find('.dt-pdf'))


    const dtReportLost = renderDatatable(
        '#dtReportLost',
        '/api/datatables/report/lost',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'book_code', name: 'book_code', orderable: true, searchable: true
            },
            {
                data: 'book_title', name: 'book_title', orderable: true, searchable: true
            },
            {
                data: 'borrower_name', name: 'borrower_name', orderable: true, searchable: true
            },
            {
                data: 'return_date', name: 'return_date', orderable: true, searchable: true
            },
        ],
        function (data, type, row) {
            const path = 'reports/' + row.id
            let updateBtn = '',
            detailBtn = '',
            deleteBtn = ''

                        detailBtn = '<a href="'+ path +'/lost" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'

            content = detailBtn +' '+ updateBtn + ' '+ deleteBtn

            return content
        },
        
        [[ 1, 'asc' ]],
        function(d) {
            if(startDate &&  endDate){
                d.startDate = startDate,
                d.endDate   =   endDate
            }
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtReportLost, $('#dtReportLost').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtReportLost, $('#dtReportLost').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtReportLost, $('#dtReportLost').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtReportLost, $('#dtReportLost').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtReportLost, $('#dtReportLost').parents('.dt-container').find('.dt-pdf'))

}
