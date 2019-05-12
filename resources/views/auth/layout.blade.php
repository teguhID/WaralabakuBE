<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href={{ asset('assets/img/icons/favicon.ico') }}/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href={{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href={{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/animate/animate.css') }}>
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/animsition/css/animsition.min.css') }}>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/select2/select2.min.css') }}>
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href={{ asset('assets/css/util.css') }}>
        <link rel="stylesheet" type="text/css" href={{ asset('assets/css/main.css') }}>
    <!--===============================================================================================-->
      <title>@yield('title')</title>
</head>

        @yield('content')
        <!--===============================================================================================-->
	    <script src={{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}></script>
    <!--===============================================================================================-->
        <script src={{ asset('assets/vendor/animsition/js/animsition.min.js') }}></script>
    <!--===============================================================================================-->
        <script src={{ asset('assets/vendor/bootstrap/js/popper.js') }}></script>
        <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}></script>
    <!--===============================================================================================-->
        <script src={{ asset('assets/vendor/select2/select2.min.js') }}></script>
    <!--===============================================================================================-->
        <script src={{ asset('assets/vendor/daterangepicker/moment.min.js') }}></script>
        <script src={{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}></script>
    <!--===============================================================================================-->
        <script src={{ asset('assets/vendor/countdowntime/countdowntime.js') }}></script>
    <!--===============================================================================================-->
        <script src={{ asset('assets/js/main.js') }}></script>

</html>