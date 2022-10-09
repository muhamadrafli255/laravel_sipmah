<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>SIPMah - {{ $title }}</title>
    {{-- Styles --}}
    @include('components.styles.auth')
</head>

<body class="bg-gradient-login">


    @yield('content')

    {{-- Scripts --}}
    @include('components.scripts.auth')
</body>

</html>
