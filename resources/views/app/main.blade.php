<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('components.styles.main')
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
    @include('components.scripts.main')
</body>

</html>
