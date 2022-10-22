<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/css/select2-bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function(){
    $('#selectBooks').select2({
        theme: 'bootstrap',
    });
    $('#selectBorrower').select2({
        theme: 'bootstrap',
    });

    $('#addMore').on('click', function(){
        $('#0').select2({
            theme: 'bootstrap',
        }).click();
    });
    $('#remove').on('click', function(){
        $('#0').select2({
            theme: 'bootstrap',
        }).click();
    });
});
</script>