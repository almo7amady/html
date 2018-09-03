<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('head')

    @yield('title')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/css/emojione.min.css"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('env-to-js-data')

    <link rel="shortcut icon" href="{{ config('app.favicon') }}">

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
    <!--<mobile-visitor-warning v-if="Store.modals.mobileVisitorWarning.show" :visible.sync="Store.modals.mobileVisitorWarning.show"></mobile-visitor-warning> -->
    </div>

@include('php-to-js-data')

@yield('script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
	<!--
    <script src="{{ mix('/js/manifest.js') }}"></script>
	<script src="{{ mix('/js/vendor.js') }}"></script>
	<script src="{{ mix('/js/app.js') }}"></script>
    -->
	
    <script src="https://cdn.rawgit.com/almo7amady/html/62086ecf/public/js/manifest.js"></script>
	<script src="https://cdn.rawgit.com/almo7amady/html/62086ecf/public/js/vendor.js"></script>
    <script src="https://cdn.rawgit.com/almo7amady/html/62086ecf/public/js/app.js"></script>
@yield('footer')

    <script async src="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/lib/js/emojione.min.js"></script>

    <script type="text/javascript">
        ( function() {
            if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
            var unit = {"calltype":"async[2]","publisher":"almohamady7","width":320,"height":50,"sid":"Chitika Default"};
            var placement_id = window.CHITIKA.units.length;
            window.CHITIKA.units.push(unit);
            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
        }());
    </script>

    <script type="text/javascript">
    ( function() {
        if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
        var unit = {"calltype":"async[2]","publisher":"almohamady7","width":728,"height":90,"sid":"Chitika Default"};
        var placement_id = window.CHITIKA.units.length;
        window.CHITIKA.units.push(unit);
        document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
    }());
    </script>
    <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>

    <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>

    <script type='text/javascript' src='//p310774.clksite.com/adServe/banners?tid=310774_605546_6&type=floating_banner&size=6&position=center'></script>
    
    <script data-cfasync='false' type='text/javascript' src='//p310774.clksite.com/adServe/banners?tid=310774_605546_0&size=7'></script>

    <script data-cfasync='false' type='text/javascript' src='https://p310774.clksite.com/adServe/banners?tid=310774_605546_4'></script>
    
    <script type="text/javascript">
    ( function() {
    if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
    var unit = {"calltype":"async[2]","publisher":"almohamady7","width":550,"height":250,"sid":"Chitika Default"};
    var placement_id = window.CHITIKA.units.length;
    window.CHITIKA.units.push(unit);
    document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
    }());
    </script>
    <script type="text/javascript" src="https://cdn.chitika.net/getads.js" async></script>

</body>
</html>
