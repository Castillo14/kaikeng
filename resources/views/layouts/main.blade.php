<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"                content="{{ route('landing') }}" />
    <meta property="og:type"               content="Foundation" />
    <meta property="og:title"              content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:description"        content="" />
    <meta property="og:image"              content="{{ asset('images/CARLO.png') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="navbar-brand js-scroll-trigger d-flex flex-column">
        <span class="text-white">Visit and like us on</span>
        <div class="text-center">
            <img src="{{ asset('img/facebook.png') }}" class="img-fluid" width="40%">
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-top: -60px !important;">
        <ul class="navbar-nav ml-auto text-white">
            <div class="mr-4">
                <a href="{{ route('form') }}" class="btn btn-link text-white font-weight-bold">APPLY</a>
            </div>
            <div class="mr-4">
                <a href="#" class="btn btn-link text-white font-weight-bold">What is Ka-Iking HELPING?</a>
            </div>
            <div class="mr-4">
                <a href="#" class="btn btn-link text-white font-weight-bold">Term Of Use</a>
            </div>
        </ul>
    </div>
</nav>
<!-- Masthead-->
@yield('content')
<footer>
    <div class="d-flex pb-4">
        <div class="ps-3 text-white d-flex flex-row">
            <i class="fas fa-share-alt fs-1 me-4"></i>
            <span class="align-self-center">Share Ka Iking HELPING</span>
        </div>
        <div class="text-white me-4" style="margin-left: 27%;">Copyright@ Yaramay 2021</div>
        <div></div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@yield('scripts')
<!--
Developer: Renier R. Trenuela II
Year developed: 2020
-->
</body>
</html>
