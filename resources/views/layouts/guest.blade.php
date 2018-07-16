<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('head')

    @yield('title')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/lib/js/emojione.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/css/emojione.min.css"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('env-to-js-data')

    <link rel="shortcut icon" href="{{ config('app.favicon') }}">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8027817553143626",
        enable_page_level_ads: true
    });
    </script>
</head>

<body>
@include('google-analytics')

<div id="voten-app">
    <vue-progress-bar></vue-progress-bar>

    <div class="v-content-wrapper">
		<left-sidebar></left-sidebar>

        <div class="v-content" id="v-content" @scroll.passive="scrolled">
            @yield('content')
        </div>

        <guest-sidebar v-show="showSidebars"></guest-sidebar>
    </div>

    <photo-viewer v-if="Store.modals.photoViewer.show" :visible.sync="Store.modals.photoViewer.show"></photo-viewer>
    <gif-player v-if="Store.modals.gifPlayer.show" :visible.sync="Store.modals.gifPlayer.show"></gif-player>
    <embed-viewer v-if="Store.modals.embedViewer.show" :visible.sync="Store.modals.embedViewer.show"></embed-viewer>
    <search-modal v-if="Store.modals.search.show"></search-modal>
    <authentication-modal v-if="Store.modals.authintication.show" :visible.sync="Store.modals.authintication.show"></authentication-modal>
    <markdown-guide v-if="Store.modals.markdownGuide.show" :visible.sync="Store.modals.markdownGuide.show"></markdown-guide>
    <keyboard-shortcuts-guide v-if="Store.modals.keyboardShortcutsGuide.show" :visible.sync="Store.modals.keyboardShortcutsGuide.show"></keyboard-shortcuts-guide>
    <mobile-visitor-warning v-if="Store.modals.mobileVisitorWarning.show" :visible.sync="Store.modals.mobileVisitorWarning.show"></mobile-visitor-warning>
</div>

@include('php-to-js-data')

@yield('script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="{{ mix('/js/manifest.js') }}"></script>
	<script src="{{ mix('/js/vendor.js') }}"></script>
	<script src="{{ mix('/js/app.js') }}"></script>
@yield('footer')

<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','nzv10');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
-->
</body>
</html>
