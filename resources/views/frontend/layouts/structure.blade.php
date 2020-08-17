@include('frontend.layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('res/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('res/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('res/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('res/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('res/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('res/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('res/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('res/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('res/css/style.css') }}">
    <title>@yield('title')</title>

</head>
<body>
    <div class="header">@yield('header')</div>
    <div class="content">@yield('content')</div>
    <div class="footer">@yield('footer')</div>


    <script src="{{ asset('res/js/jquery.min.js') }}"></script>
    <script src="{{ asset('res/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('res/js/popper.min.js') }}"></script>
    <script src="{{ asset('res/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('res/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('res/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('res/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('res/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('res/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('res/js/aos.js') }}"></script>
    <script src="{{ asset('res/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('res/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('res/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('res/js/main.js') }}"></script>
</body>
</html>
