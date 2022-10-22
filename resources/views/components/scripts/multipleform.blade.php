<script type="text/javascript">
    $(document).ready(function () {
        $("#addMore").click(function () {
            var html = $("#copy").html();
            $("#after").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", "#remove", function () {
            $(this).parents(".control-group").remove();
        });
    });

</script>
