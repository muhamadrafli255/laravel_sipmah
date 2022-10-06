<script src="/plugins/select2/js/select2.full.min.js"></script>
<script>
    $.fn.select2.defaults.set('theme', 'bootstrap4')
    function renderSelect2(element, url, placeholder, results, allowClear = false, dropdownParent = 'body') {
        if (typeof placeholder == 'undefined' || placeholder == null || placeholder.length == 0) placeholder = 'Choose'

        $(element).select2({
            allowClear: allowClear,
            placeholder: placeholder,
            dropdownParent: $(dropdownParent),
            width: '100%',
            ajax: {
                url: "/api/provinces",
                headers: {
                    'Authorization' : 'Bearer '+ localStorage.getItem('api-token'),
                    'Content-Type' : 'application/json',
                },
                dataType: 'json',
                type: 'GET',
                data: function (params) {
                    const query = { keyword: params.term }
                    return query;
                },
                processResults: results
            },
            escapeMarkup: function (markup) { return markup; },
        })
    }
</script><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/components/scripts/select2.blade.php ENDPATH**/ ?>