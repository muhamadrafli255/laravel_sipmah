<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>

$(function(){
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
        });

        $(function(){
            $('#searchBook').on('keyup', function(){
                let book_name = $('#searchBook').val()
                if(book_name != '')
                {
                $.ajax({
                    type: 'GET',
                    url: "/home",
                    data: {book_name:book_name},
                    cache: false,

                    success: function(data){
                        $('#card').html(data)
                        console.log(data)
                    },
                    error: function(data){
                        console.log('error:',data)
                    }
                })
                }else{
                    location.reload()
                }
            })
        })

    });

</script>