<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    $(function(){
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
    });

        $(function(){
            $('#user').on('change', function(){
                let user_id = $('#user').val()
                $.ajax({
                    type: 'POST',
                    url: "/officers/getuser",
                    data: {user_id:user_id},
                    cache: false,

                    success: function(msg){
                        $('#email').val(msg)
                    },
                    error: function(data){
                        console.log('error:',data)
                    },
                })
            })
        })
    })

</script>