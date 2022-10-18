<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/ruang-admin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/mystyle.css">
    <link href="img/logo/logo.png" rel="icon">
    @yield('style')
    <title>SIPMah - {{ $title }}</title>
</head>

<body id="page-top">
    <div id="wrapper">
        @include('components.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('components.topbar')

                @yield('content')

            </div>
            @include('components.footer')
        </div>
    </div>

    @include('components.scroll')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0661b15b8c.js" crossorigin="anonymous"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/js/ruang-admin.js"></script>
    @yield('script')
{{-- Datatables --}}
{{-- <script src="/vendor/datatables/jquery.dataTables.min.js"></script> --}}


{{-- <script>
$(document).ready(function(){
    $('#selectKategori').chosen();
});
</script> --}}
</body>

</html>
