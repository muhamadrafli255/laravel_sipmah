renderSelect2(
    '#iProvince',
    '/api/provinces',
    'Pilih Provinsi',
    function (response) {
        const res = response.results

        return {
            results: $.map(res, function (res) {

                return {
                    id: res.province_id,
                    text: res.province_name
                }
            })
        }
    },
    true,
)

$('#iProvince2').on('select2:select', function(event){
    $('#iCity2').val(null).trigger('change').attr('disabled', false);
    getCitySelect2(this.value)
})