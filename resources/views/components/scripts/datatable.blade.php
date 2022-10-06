<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script>
    $.extend(true, $.fn.dataTable.defaults, {
        responsive: true,
        processing: true,
        serverSide: true,
        autoWidth: false,
        language: {
            lengthMenu: '_MENU_',
            zeroRecords: "Tidak ada catatan yang cocok untuk ditemukan",
            infoEmpty: "Tidak ada data",
            emptyTable: "Tidak ada catatan yang cocok untuk ditemukan",
            paginate: {
                first: '<i class="fas fa-arrow-to-left fa-fw"></i>',
                last: '<i class="fas fa-arrow-to-right fa-fw"></i>',
                next: '<i class="fas fa-arrow-right fa-fw"></i>',
                previous: '<i class="fas fa-arrow-left fa-fw"></i>'
            },
            processing: `<div class="h-100 d-flex flex-column align-items-center justify-content-center">
                <div class="spinner-border text-primary mb-3" role="status"><span class="sr-only">Processing...</span></div>
                <span class="font-weight-semibold">Mohon Tungu...</span>
            </div>`,
            search: '_INPUT_'
        },
        dom: '<"d-none"B><"position-relative mb-3"tr><"d-flex justify-content-center"p>',
        columnDefs: [{
            className: 'text-right',
            targets: 0,
            width: 1,
            orderable: false,
            searchable: false,
            render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            }
        }],
        order: [[ 0, 'asc' ]]
    })

    $(window).on('resize', function () {
        $.fn.dataTable.tables({
            visible: true,
            api: true
        }).columns.adjust().draw()
    })

    function renderDatatable (elementId, targetUrl, columnDrawOptions, actionColumnRenderer, orderDef, queryString, callback) {

        let exportedColumnCount = columnDrawOptions.length
        const exportColumnIndexes = Array.from(Array(exportedColumnCount).keys())

        if (typeof actionColumnRenderer !== 'undefined' && actionColumnRenderer !== null) {
            columnDrawOptions.push({
                data : columnDrawOptions[0].data,
                name: 'action',
                class: 'table-action text-center',
                orderable: false,
                searchable: false,
                render: actionColumnRenderer
            })
        }

        if (typeof orderDef == 'undefined' || orderDef == null || orderDef.length == 0) orderDef = [[ 1, 'asc' ]]

        if (typeof queryString == 'undefined' || queryString == null || queryString.length == 0) {
            queryString = function(d) {
                return d
            }
        }

        if (typeof callback == 'undefined' || callback == null || callback.length == 0) {
            callback = function(settings) {}
        }
        return $(elementId).DataTable({
            ajax: {
                url: targetUrl,
                data: queryString,
                beforeSend: function (request) {
                    request.setRequestHeader('Authorization', ['Bearer '+ localStorage.getItem('api-token')])
                }
            },
            columns: columnDrawOptions,
            drawCallback: callback,
            order: orderDef,
            buttons: [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: exportColumnIndexes
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: exportColumnIndexes
                    },
                    title: getFileName
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: exportColumnIndexes
                    },
                    title: getFileName
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: exportColumnIndexes
                    },
                    title: getFileName
                }
            ]
        });
    }

    function setDatatableFilterField(dataTableObj, filterElmId) {
        $(filterElmId).on('keyup search', function (e) {
            if (e.which == 13 || e.type == 'search') {
                dataTableObj.search(this.value).draw()
            }
        })
    }

    function setDatatableLengthField(dataTableObj, lengthElmId) {
        $(lengthElmId).on('change', function () {
            dataTableObj.page.len(this.value).draw();
        })
    }

    function setDatatableCopyButton(dataTableObj, exportButtonElmId) {
        const tableElm = dataTableObj.context[0].sTableId
        $(exportButtonElmId).on('click', function () {
            $('.buttons-copy[aria-controls="'+tableElm+'"]').trigger('click')
        })
    }

    function setDatatablePrintButton(dataTableObj, exportButtonElmId) {
        const tableElm = dataTableObj.context[0].sTableId
        $(exportButtonElmId).on('click', function () {
            $('.buttons-print[aria-controls="'+tableElm+'"]').trigger('click')
        })
    }

    function setDatatableExcelButton(dataTableObj, exportButtonElmId) {
        const tableElm = dataTableObj.context[0].sTableId
        $(exportButtonElmId).on('click', function () {
            $('.buttons-excel[aria-controls="'+tableElm+'"]').trigger('click')
        })
    }

    function setDatatablePdfButton(dataTableObj, exportButtonElmId) {
        const tableElm = dataTableObj.context[0].sTableId
        $(exportButtonElmId).on('click', function () {
            $('.buttons-pdf[aria-controls="'+tableElm+'"]').trigger('click')
        })
    }

    function getFileName() {
        return $('head title').text() + ' ' + moment().format('YYYY-MM-DD')
    }
</script>