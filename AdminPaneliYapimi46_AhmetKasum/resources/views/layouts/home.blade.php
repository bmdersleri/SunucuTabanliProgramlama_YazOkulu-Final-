<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA Compatible" content="IE-edge">
    <title>@yield('title')</title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="OmerERTURK">


    <link type="text/css" media="all" rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
    <link type="text/css" media="all" href="{{ asset('assets')}}/css/slider.css"  rel="stylesheet">
    <script type="text/javascript"  rel="stylesheet" src="{{ asset('assets')}}/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" rel="stylesheet" src="{{ asset('assets')}}/js/move-top.js"></script>
    <script type="text/javascript" rel="stylesheet" src="{{ asset('assets')}}/js/easing.js"></script>
    <script type="text/javascript" rel="stylesheet" src="{{ asset('assets')}}/js/startstop-slider.js"></script>
    @yield('css')
    @yield('headerjs')

</head>
<body>


@section('content')
@show







</body>
</html>
