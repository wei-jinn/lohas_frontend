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
       /*write in public/css/app.css*/
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


    <img id="banner" src="{{asset('storage/images/image-banner.jpg')}}" >

    <div class="b1-description">

        <p id="text-1">從眾多品牌中 </p>
        <p id="text-2">脫穎而出</p>
        <p id="text-3">你想要的任何網站需求， <br>楽活資訊為您呈現！ </p>

    </div>

    <div class="b2-container">
        <div class="b2-element">

            <p class="b2-content b2-title">顧問諮詢</p>
            <p class="b2-content">協助顧客歸納需求，企劃架構流程及視覺風格擬定方向</p>

        </div>

        <div class="b2-element">

            <p class="b2-content b2-title">系統開發</p>
            <p class="b2-content">基本形象或購物功能外，可製作其他網站功能及串接需求資料</p>

        </div>

        <div class="b2-element">

            <p class="b2-content b2-title">視覺設計</p>
            <p class="b2-content">依客戶需求及產業特質等量身訂做專屬設計風格</p>

        </div>
    </div>

    <div class="b3-container">

        <div class="b3-description">
            <p class="b3-title">視覺設計</p>
            <hr><br>
            <p class="b3-content">樂活多媒體有限公司坐落於台北，是一支極具創新力的青創團隊。
                <br><br>
                著眼於網頁設計規劃，從專業的網路行銷角度替客戶量身打造注重質感的品牌識別，在虛擬世界中尋找人性化溝通的更多可能性。
                <br><br>
                以人為本的角度思考，我們注重使用者體驗，從功能規劃到使用動線，盡可能滿足使用者的操作方式，因為我們深信好的網站必須能傳遞情感。</p>
        </div>

        <div class="b3-image"><img height = "400px" src="storage/images/image-960_670.jpg"></div>

    </div>

    <div class="b4-container">

        <div class="b4-element">

            <div class="b4-image"><img height = "150px" src="storage/images/image-01_green.png"></div>

            <div class="b4-description">
                <p class="b4-content b4-title">視覺設計</p>
                <p class="b4-content">著眼於網頁設計規劃，從專業的網路行銷角度替客戶量身打造注重質感的品牌識別，在虛擬世界中尋找人性化溝通的更多可能性。</p>
            </div>
        </div>



    </div>

</div>


</body>

