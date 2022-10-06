<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0661b15b8c.js" crossorigin="anonymous"></script>
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/js/ruang-admin.min.js"></script>
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/js/demo/chart-area-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>


<script src="/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="/js/chosen.jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var oTable = $('#dataTableHover').DataTable({
            responsive: true,
            "dom": "lrtip",
            "bLengthMenu": false,
            "bInfo": false,
            "bLengthChange": false,

        });

        // new $.fn.dataTable.FixedHeader(oTable);

        $('#lengthMenu').on('change', function () {
            let row = $("#lengthMenu").val()
            oTable.page.len(row).draw();
        });
        $('#SearchBox').keyup(function () {
            oTable.search($(this).val()).draw();
        });
        $('[data-toggle="tooltip"]').tooltip(); 
    });

</script>

<script>
    $(document).ready(function () {
        var oTable = $('#dataTableHover1').DataTable({
            responsive: true,
            "dom": "lrtip",
            "bLengthMenu": false,
            "bInfo": false,
            "bLengthChange": false,

        });

        // new $.fn.dataTable.FixedHeader(oTable);

        $('#lengthMenu').on('change', function () {
            let row = $("#lengthMenu").val()
            oTable.page.len(row).draw();
        });
        $('#SearchBox').keyup(function () {
            oTable.search($(this).val()).draw();
        });
        $('[data-toggle="tooltip"]').tooltip(); 
    });

</script>

<script>
    $(document).ready(function () {
        var oTable = $('#dataTableHover2').DataTable({
            responsive: true,
            "dom": "lrtip",
            "bLengthMenu": false,
            "bInfo": false,
            "bLengthChange": false,

        });

        // new $.fn.dataTable.FixedHeader(oTable);

        $('#lengthMenu').on('change', function () {
            let row = $("#lengthMenu").val()
            oTable.page.len(row).draw();
        });
        $('#SearchBox').keyup(function () {
            oTable.search($(this).val()).draw();
        });
        $('[data-toggle="tooltip"]').tooltip(); 
    });

</script>



<script>
    $(document).ready(function(){
        $('#selectKategori').chosen();
    });
</script><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/components/scripts/main.blade.php ENDPATH**/ ?>