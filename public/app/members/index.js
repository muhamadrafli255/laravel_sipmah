$(function () {
    initDatatable()

})

function initDatatable() {
    const dtMember = renderDatatable(
        '#dtMember',
        '/api/datatables/members',
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
            {
                data: 'status', name:'status', orderable: true, searchable: true,
                render: function(data, type, row){
                    statusBadge = '<span class="badge badge-primary">Aktif</span>';
                    if(data != 1){
                        statusBadge = '<span class="badge badge-danger">Non Aktif</span>'; 
                    }

                    return statusBadge;
                }
            },
            
        ],
        function (data, type, row) {
            const status = row.status
            const path = 'members/' + row.id
            let updateBtn = '',
            detailBtn = '',
            updateStatusBtn = ''

            // if (permission.update) {
                detailBtn = '<a href="'+ path +'" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'
                updateBtn = '<a href="'+ path +'/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-fw fa-edit"></i></a>'
                if(status == 1){
                updateStatusBtn = '<a href="'+ path +'/update/status" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Nonatifkan"><i class="fas fa-fw fa-xmark"></i></a>'
                }else{
                    updateStatusBtn = '<a href="'+ path +'/update/status" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Aktifkan"><i class="fas fa-fw fa-check"></i></a>'
                }
            // } 

            content = detailBtn +' '+ updateBtn + ' '+ updateStatusBtn

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

    setDatatableLengthField(dtMember, $('#dtMember').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtMember, $('#dtMember').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtMember, $('#dtMember').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtMember, $('#dtMember').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtMember, $('#dtMember').parents('.dt-container').find('.dt-pdf'))
}

function updateStatus(id, name) {
    Swal.mixin({
        icon: 'warning',
        customClass: {
            confirmButton: 'btn btn-primary waves-effect waves-light mr-2',
            cancelButton: 'btn btn-default waves-effect waves-light'
        },
        buttonsStyling: false
    }).fire({
        html: `<h4>Status Jenis Akun</h4>
        <p class="mb-0">Apakah anda yakin ingin mengubah status ${name}?</p>`,
        showCancelButton: true,
        confirmButtonText: 'OK',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $('body').append(`
                <form action="roles/${id}/edit-status" method="POST" class="d-none" id="updateStatus">
                    <input type="hidden" name="_token" value="${$('meta[name=csrf-token]').attr('content')}">
                    <input type="hidden" name="_method" value="PUT">
                </form>
            `)

            $('#updateStatus').trigger('submit')
        }
    })
}