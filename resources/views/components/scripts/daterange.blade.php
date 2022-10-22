<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
    $(document).ready(function(){
        let start = moment().startOf('month')
        let end   = moment().endOf('month')

        $('#createdAt').daterangepicker({
            startDate   : start,
            endDate     : end
        });
    });
</script>