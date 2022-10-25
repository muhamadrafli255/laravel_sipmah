<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function(){
    $('#selectBooks').select2({
        theme: 'bootstrap4',
    });
    $('#selectBorrower').select2({
        theme: 'bootstrap4',
    });

    $('#addMore').on('click', function(){
        $('#0').select2({
            theme: 'bootstrap4',
        }).click();
    });
    $('#remove').on('click', function(){
        $('#0').select2({
            theme: 'bootstrap4',
        }).click();
    });
});

function renderSelect(){
    $('#0').select2({
            theme: 'bootstrap4',
        });
}
</script>