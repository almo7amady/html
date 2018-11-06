<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="propeller" content="3f496c4c3184ad2489106e0e8238080d">
    @yield('head')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/css/emojione.min.css"/>
 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('env-to-js-data')

    <link rel="shortcut icon" href="{{ config('app.favicon') }}">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128385985-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-128385985-1');
    </script>


        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NW8JD35');</script>
    <!-- End Google Tag Manager -->
</head>

<body>

@include('google-analytics')

<div id="voten-app">
    <vue-progress-bar></vue-progress-bar>

    <div class="shade" v-if="showTour"></div>
    <tour v-if="showTour && activeTour.id == 'os-notifications'" :position="{ top: '7em' }"></tour>

    <div class="v-content-wrapper">
        <left-sidebar v-show="showSidebars"></left-sidebar>

        <div class="v-content" id="v-content" @scroll.passive="scrolled">
            <announcement></announcement>
            
            @yield('content')
        </div>

        <right-sidebar v-show="showSidebars"></right-sidebar>
    </div>

    <messages v-show="Store.modals.messages.show"></messages>
    <search-modal v-if="Store.modals.search.show"></search-modal>    
    <sidebar-settings :visible.sync="Store.modals.sidebarSettings.show" v-if="Store.modals.sidebarSettings.show"></sidebar-settings>
    <feed-settings :visible.sync="Store.modals.feedSettings.show" v-if="Store.modals.feedSettings.show && isLoggedIn"></feed-settings>
    <report-comment :visible.sync="Store.modals.reportComment.show" v-if="Store.modals.reportComment.show"></report-comment>
    <report-submission :visible.sync="Store.modals.reportSubmission.show" v-if="Store.modals.reportSubmission.show"></report-submission>
    <notifications :visible.sync="Store.modals.notifications.show" v-show="Store.modals.notifications.show"></notifications>
    <new-submission v-show="Store.modals.newSubmission.show" :visible.sync="Store.modals.newSubmission.show"></new-submission>
    <preferences v-if="Store.modals.preferences.show" :visible.sync="Store.modals.preferences.show"></preferences>
    <new-channel v-show="Store.modals.newChannel.show" :visible.sync="Store.modals.newChannel.show"></new-channel>
    <markdown-guide v-if="Store.modals.markdownGuide.show" :visible.sync="Store.modals.markdownGuide.show"></markdown-guide>
    <feedback v-if="Store.modals.feedback.show" :visible.sync="Store.modals.feedback.show"></feedback>
    <photo-viewer v-if="Store.modals.photoViewer.show" :visible.sync="Store.modals.photoViewer.show"></photo-viewer>
    <gif-player v-if="Store.modals.gifPlayer.show" :visible.sync="Store.modals.gifPlayer.show"></gif-player>
    <embed-viewer v-if="Store.modals.embedViewer.show" :visible.sync="Store.modals.embedViewer.show"></embed-viewer>
    <keyboard-shortcuts-guide v-if="Store.modals.keyboardShortcutsGuide.show" :visible.sync="Store.modals.keyboardShortcutsGuide.show"></keyboard-shortcuts-guide>
    <!--<mobile-visitor-warning v-if="Store.modals.mobileVisitorWarning.show" :visible.sync="Store.modals.mobileVisitorWarning.show"></mobile-visitor-warning> -->
    <ban-user-modal v-if="Store.modals.banUser.show" :visible.sync="Store.modals.banUser.show"></ban-user-modal>
</div>

@include('php-to-js-data')

@yield('script')
   <!--
    <script src="{{ mix('/js/manifest.js') }}"></script>
	<script src="{{ mix('/js/vendor.js') }}"></script>
	<script src="{{ mix('/js/app.js') }}"></script>
    -->

    <script src="https://rawcdn.githack.com/almo7amady/html/8ab793f3f7f31ff19686defe9facd9bd4019508f/public/js/manifest.js"></script>
	<script src="https://rawcdn.githack.com/almo7amady/html/8ab793f3f7f31ff19686defe9facd9bd4019508f/public/js/vendor.js"></script>
    <script src="https://rawcdn.githack.com/almo7amady/html/8ab793f3f7f31ff19686defe9facd9bd4019508f/public/js/app.js"></script>
@yield('footer')
<script async src="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/lib/js/emojione.min.js"></script>


<!-- Twitter universal website tag code
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','nzv10');
twq('track','PageView');
</script>

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
   
<script type="text/javascript">
        ( function() {
            if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
            var unit = {"calltype":"async[2]","publisher":"almohamady7","width":320,"height":50,"sid":"Chitika Default"};
            var placement_id = window.CHITIKA.units.length;
            window.CHITIKA.units.push(unit);
            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
        }());
    </script>
    <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>

        
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW8JD35"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    </body>
</html>
