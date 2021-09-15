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

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('theme/wonder/css/styles.css') }}" rel="stylesheet"/>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('theme/wonder/js/scripts.js') }}"></script>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container px-5">
        <a class="navbar-brand d-flex flex-row"
           href="https://www.facebook.com/CARLO-210247167661296/?ref=pages_you_manage"
           target="_blank">
            <i class="fab fa-facebook fa-2x"></i>
            <div class="align-self-center ms-3">Visit and Like Us</div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#mdl-whatIsCARLO">
                        What is CARLO?
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#mdl-tos">
                        Terms Of Use
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info text-white" href="{{ route('follow.up') }}">
                        My Ticket Status
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- What is Carlo -->
<div class="modal fade" id="mdl-whatIsCARLO" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column">
                    <div class="text-center mb-2">
                        <h5 class="modal-title" id="staticBackdropLabel">What is Carlo?</h5>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra ante ut pharetra
                            condimentum. Sed mauris mauris, feugiat vel quam eget, finibus maximus tortor. Sed a lectus
                            maximus ante aliquam finibus. In sed tellus sed lectus fringilla egestas. Donec a nisi
                            neque. Vivamus tincidunt placerat massa, in bibendum eros elementum dapibus. Nullam lacinia
                            mattis convallis. In vitae lorem tortor. Vestibulum feugiat vehicula ante id tempus. Aliquam
                            quis elit nec diam sollicitudin iaculis. Praesent at hendrerit ante.

                            Aliquam euismod pharetra neque. Pellentesque congue porta feugiat. Duis laoreet ut enim ut
                            tincidunt. Etiam eget malesuada sapien. Sed libero leo, ultrices quis tempor ut, venenatis
                            in erat. Curabitur vitae ligula molestie, feugiat metus at, fermentum tellus. Etiam et ex a
                            magna molestie facilisis ac vitae mauris. Sed sagittis viverra nibh, nec lacinia ipsum
                            blandit vitae. In tellus lorem, auctor vestibulum nisl vestibulum, sollicitudin dignissim
                            erat.

                            Donec ultrices laoreet velit id auctor. Nullam hendrerit, nisi ut elementum facilisis, diam
                            mi suscipit magna, a auctor nulla leo at leo. Vestibulum quis iaculis elit. Curabitur tempor
                            aliquam nibh imperdiet efficitur. In id molestie ligula. Nam et dolor sed ante laoreet
                            finibus. Aliquam ultricies odio vitae aliquam egestas. Nam sit amet ex feugiat, aliquet quam
                            ut, blandit risus.

                            Vivamus hendrerit, ante id accumsan vestibulum, eros turpis accumsan quam, tincidunt euismod
                            nulla leo ut magna. Ut sit amet viverra eros. Nulla tincidunt sollicitudin lectus, ac luctus
                            lorem pulvinar vel. Suspendisse venenatis tellus eu pulvinar feugiat. In porttitor dictum
                            congue. In condimentum risus ut arcu facilisis euismod. Donec quis laoreet neque, vel rutrum
                            metus.

                            Nam molestie mollis dui ac dignissim. Phasellus varius dapibus vestibulum. In ornare nisi et
                            rhoncus volutpat. Aliquam quam ante, vestibulum at neque sit amet, mattis hendrerit mauris.
                            Integer rutrum sollicitudin metus nec vestibulum. Aenean eget eleifend nulla. Vestibulum
                            viverra tellus eget feugiat gravida.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- What is Carlo -->
<div class="modal fade" id="mdl-tos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column">
                    <div class="text-center mb-2">
                        <h5 class="modal-title" id="staticBackdropLabel">Terms of Use</h5>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra ante ut pharetra
                            condimentum. Sed mauris mauris, feugiat vel quam eget, finibus maximus tortor. Sed a lectus
                            maximus ante aliquam finibus. In sed tellus sed lectus fringilla egestas. Donec a nisi
                            neque. Vivamus tincidunt placerat massa, in bibendum eros elementum dapibus. Nullam lacinia
                            mattis convallis. In vitae lorem tortor. Vestibulum feugiat vehicula ante id tempus. Aliquam
                            quis elit nec diam sollicitudin iaculis. Praesent at hendrerit ante.

                            Aliquam euismod pharetra neque. Pellentesque congue porta feugiat. Duis laoreet ut enim ut
                            tincidunt. Etiam eget malesuada sapien. Sed libero leo, ultrices quis tempor ut, venenatis
                            in erat. Curabitur vitae ligula molestie, feugiat metus at, fermentum tellus. Etiam et ex a
                            magna molestie facilisis ac vitae mauris. Sed sagittis viverra nibh, nec lacinia ipsum
                            blandit vitae. In tellus lorem, auctor vestibulum nisl vestibulum, sollicitudin dignissim
                            erat.

                            Donec ultrices laoreet velit id auctor. Nullam hendrerit, nisi ut elementum facilisis, diam
                            mi suscipit magna, a auctor nulla leo at leo. Vestibulum quis iaculis elit. Curabitur tempor
                            aliquam nibh imperdiet efficitur. In id molestie ligula. Nam et dolor sed ante laoreet
                            finibus. Aliquam ultricies odio vitae aliquam egestas. Nam sit amet ex feugiat, aliquet quam
                            ut, blandit risus.

                            Vivamus hendrerit, ante id accumsan vestibulum, eros turpis accumsan quam, tincidunt euismod
                            nulla leo ut magna. Ut sit amet viverra eros. Nulla tincidunt sollicitudin lectus, ac luctus
                            lorem pulvinar vel. Suspendisse venenatis tellus eu pulvinar feugiat. In porttitor dictum
                            congue. In condimentum risus ut arcu facilisis euismod. Donec quis laoreet neque, vel rutrum
                            metus.

                            Nam molestie mollis dui ac dignissim. Phasellus varius dapibus vestibulum. In ornare nisi et
                            rhoncus volutpat. Aliquam quam ante, vestibulum at neque sit amet, mattis hendrerit mauris.
                            Integer rutrum sollicitudin metus nec vestibulum. Aenean eget eleifend nulla. Vestibulum
                            viverra tellus eget feugiat gravida.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
<!-- Footer-->
<footer class="py-3 bg-white fixed-bottom">
    <div class="container px-3">
        <div class="m-0 small d-flex flex-row">
            <i class="fas fa-share-alt fa-2x"></i>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('landing') }}"
               class="btn btn-link my-auto ms-1">
                SHARE ka Iking HELPING</a>
        </div>
    </div>
</footer>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@yield('scripts')
<!--
Developer: Renier R. Trenuela II
Year developed: 2020
-->
</body>
</html>
