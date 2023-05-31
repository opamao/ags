<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>AGS - Agence Général de Sécurité | {{ $titreFavicon }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="security guard" />
    <meta name="keywords" content="security guard/guard team/bodyguard" />
    <meta name="author" content="THEODORE YAPI - theodoreyapi@gmail.com" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/meanmenu.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slicknav.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/layers.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/navigation.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/settings.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('images/icon.png') }}"/>
</head>

<body>

@include('layout.headerbig')

@yield('content')

@include('layout.footer')
@include('layout.script')
</body>

</html>
