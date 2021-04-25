<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- SEO  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta description="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ruya studio - @yield('title')</title>
    <link rel="icon" href="{{ URL::asset('Ruya-Branding-Logo.png') }}" type="image/x-icon"/>
    <!-- Styles -->
    <link href="{{ URL::asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/et-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/themify-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('fonts/lovelo/stylesheet.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome.min.css')}}"  rel="stylesheet">
    <link href="{{asset('img/assets/favicon.png')}}" rel="icon" type="image/png">
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/colors/blue.css')}}" id="color-scheme" rel="stylesheet" type="text/css">



</head>

<body>

AUTH

@yield('content')

<a id="back-to-top"><i class="icon ion-chevron-up"></i></a>
<!-- Scripts -->
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
