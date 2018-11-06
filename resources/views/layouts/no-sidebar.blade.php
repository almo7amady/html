<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('head')

    @yield('title')

    @section('styles')
    <!--
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    -->
    <link rel="stylesheet" href="https://rawcdn.githack.com/almo7amady/html/d87d34027b8ffbfeb6b5d7d3d337a7730008692f/public/css/app.css">        <script src="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/lib/js/emojione.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/css/emojione.min.css"/>
    @show
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('env-to-js-data')

    <link rel="shortcut icon" href="{{ config('app.favicon') }}">
</head>

<body>
@include('google-analytics')

<div id="voten-app">
    <div class="v-content-wrapper">
        <div class="v-content" id="v-content" @scroll.passive="scrolled">
            @yield('content')
        </div>
    </div>
</div>

@include('php-to-js-data')

@yield('script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
   <!--
    <script src="{{ mix('/js/manifest.js') }}"></script>
	<script src="{{ mix('/js/vendor.js') }}"></script>
	<script src="{{ mix('/js/app.js') }}"></script>
    -->

    <script src="https://rawcdn.githack.com/almo7amady/html/8ab793f3f7f31ff19686defe9facd9bd4019508f/public/js/manifest.js"></script>
	<script src="https://rawcdn.githack.com/almo7amady/html/8ab793f3f7f31ff19686defe9facd9bd4019508f/public/js/vendor.js"></script>
    <script src="https://rawcdn.githack.com/almo7amady/html/8ab793f3f7f31ff19686defe9facd9bd4019508f/public/js/app.js"></script>
@yield('footer')

</body>
</html>
