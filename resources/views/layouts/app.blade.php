<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="{{ route('landing') }}"/>
    <meta property="og:type" content="Foundation"/>
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="{{ asset('images/CARLO.png') }}"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/purpleadmin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/purpleadmin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/purpleadmin/assets/vendors/css/vendor.bundle.base.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/DataTables/datatables.min.css') }}">
    <script type="text/javascript" src="{{ asset('vendor/DataTables/datatables.min.js') }}"></script>

</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
@include('layouts.partials.navbar')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
    @include('layouts.partials.sidebar')
    <!-- partial -->
        <div class="main-panel">
        @yield('content')
        <!-- main-panel ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                <span
                    class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Yaramay 2020</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="{{ asset('theme/purpleadmin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('theme/purpleadmin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('theme/purpleadmin/assets/js/misc.js') }}"></script>
<script src="{{ asset('theme/purpleadmin/assets/js/file-upload.js') }}"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@yield('scripts')
</body>
</html>
