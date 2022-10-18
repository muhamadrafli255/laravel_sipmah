<link href = "https://code.jquery.com/ui/1.10.4/themes/Flick/jquery-ui.css"
rel = "stylesheet">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>e="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />



<script>
    $(function () {
        $('#dateBorrow').datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: false,
            changeYear: false,
            maxDate: new Date(),
        });
        $('#estimatedReturned').datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: false,
            changeYear: false,
            minDate: new Date(),
        });
        $('#dateReturn').datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: false,
            changeYear: false,
            maxDate: new Date(),
        });
    }); 
</script>
