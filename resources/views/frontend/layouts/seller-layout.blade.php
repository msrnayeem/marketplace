<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Fiverr - Freelance Marketplace')</title>
    <link rel="shortcut icon" href="https://fiverr-res.cloudinary.com/npm-assets/layout-server/favicon.52df53a.ico" />

    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Css -->


    <!-- Icons -->
    <script src="https://kit.fontawesome.com/c56dc282e1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/footer.css') }}">

    @stack('styles')
    <style>
        body {
            background-color: #f5f5f5;
        }

        .accordion-button:not(.collapsed) {}
    </style>
</head>

<body>
    @include('frontend.components.seller-header')

    <div style="margin-top: 100px;">
        @yield('content')
    </div>

    @include('frontend.components.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('frontend/custom_js/nav.js') }}"></script> --}}

    @stack('scripts')
</body>

</html>
