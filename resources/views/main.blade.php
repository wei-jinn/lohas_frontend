<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lohas Life') }}</title>

    <!-- Scripts -->
    <script src="{{asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>



    </style>
</head>
<body>
<ul class="topnav">
    <li class="left"> <img id="logo-top"  src="storage/images/logo.svg" ></li>

    <li><a class="active" href="#contact">聯絡我們</a></li>
    <li><a href="#articles">文章分享</a></li>
    <li><a href="#projects">案例作品</a></li>
    <li><a href="#procedure">服務流程</a></li>
    <li><a href="#about">關於我們</a></li>
</ul>

<div class="main">


</div>


</body>

