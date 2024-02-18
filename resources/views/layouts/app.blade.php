<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ URL::to('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ URL::to('assets/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        {{-- NAVBAR --}}
        @include('layouts.navbar')


        {{-- SIDEBAR --}}
        @include('layouts.sidebar')

        {{-- dashboard --}}
        @yield('content')

        {{-- master data --}}

        {{-- @yield('barang') --}}
        
    </div>


    <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ URL::to('assets/js/feather.min.js') }}"></script>

    <script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ URL::to('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ URL::to('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/apexchart/chart-data.js') }}"></script>

    <script src="{{ URL::to('assets/js/script.js') }}"></script>
</body>

</html>