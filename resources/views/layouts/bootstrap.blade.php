<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> @yield('head') @yield('title')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('env-to-js-data')
    <link rel="shortcut icon" href="{{ config('app.favicon') }}">
</head>

<body>
    @include('google-analytics')
    <div id="bootstrap4">
        <br>
        <div class="container">
            @yield('content')
        </div>
    </div>

    @include('php-to-js-data') @yield('script')
    <script src="{{ mix('/js/manifest.js') }}"></script>
	<script src="{{ mix('/js/vendor.js') }}"></script>
    
	<!--
    <script src="https://cdn.rawgit.com/almo7amady/html/62086ecf/public/js/manifest.js"></script>
	<script src="https://cdn.rawgit.com/almo7amady/html/62086ecf/public/js/vendor.js"></script>
    -->
        <script src="{{ mix('/js/bootstrap4.js') }}"></script>
    @yield('footer')
    <script src="https://code.jquery.com/jquery-3.3.2.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
</body>
</html>