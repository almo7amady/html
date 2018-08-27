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


    <script data-cfasync='false' type='text/javascript' src='//p310774.clksite.com/adServe/banners?tid=310774_605546_5&type=slider&side=right&size=38'></script>
    <script data-cfasync='false' type='text/javascript' src='//p310774.clksite.com/adServe/banners?tid=310774_605546_4'></script>
    <meta name="propeller" content="3f496c4c3184ad2489106e0e8238080d">
    <script type="text/javascript"> 
    //default pop-under house ad url 
    clicksor_enable_pop = true; 
    clicksor_adhere_opt='corner:br'; 
    clicksor_frequencyCap =0.1;
    durl = '';
    clicksor_layer_border_color = '';
    clicksor_layer_ad_bg = '';
    clicksor_layer_ad_link_color = '';
    clicksor_layer_ad_text_color = '';
    clicksor_text_link_bg = '';
    clicksor_text_link_color = '';
    clicksor_enable_inter=true;
    </script>
    <script type="text/javascript" src="http://b.clicksor.net/show.php?nid=1&amp;pid=392686&amp;sid=655863"></script>

    <script type="text/javascript"> 
    clicksor_adhere_opt='right:100%'; 

    clicksor_default_url = '';
    clicksor_banner_border = '#99CC33'; 
    clicksor_banner_ad_bg = '#FFFFFF';
    clicksor_banner_link_color = '#000000'; 
    clicksor_banner_text_color = '#666666';
    clicksor_layer_border_color = '';
    clicksor_layer_ad_bg = ''; 
    clicksor_layer_ad_link_color = '';
    clicksor_layer_ad_text_color = ''; 
    clicksor_text_link_bg = '';
    clicksor_text_link_color = ''; 
    clicksor_enable_text_link = false;
            
    clicksor_banner_text_banner = true;
    clicksor_banner_image_banner = true; 
    clicksor_enable_layer_pop = false;
    clicksor_enable_pop = true;
    </script>
    <script type="text/javascript" src="http://b.clicksor.net/show.php?nid=1&amp;pid=392686&amp;adtype=10&amp;sid=655863"></script>

    
<script type="text/javascript">
//interstitial ad
clicksor_enable_inter = true; clicksor_maxad = -1;	 
clicksor_hourcap = -1; clicksor_showcap = 2;
//connect widget
clicksor_adhere_opt = 'corner:br';
//default pop-under house ad url
clicksor_enable_pop = true; 
clicksor_frequencyCap = -1;
durl = 'https://www.caseroot.com';
clicksor_mobile_redirect = true;
clicksor_mobile_durl = 'https://www.caseroot.com';
//default banner house ad url 
clicksor_default_url = 'https://www.caseroot.com';
clicksor_banner_border = '#A0D000'; clicksor_banner_ad_bg = '#FFFFFF';
clicksor_banner_link_color = '#000000'; clicksor_banner_text_color = '#666666';
clicksor_banner_image_banner = true; clicksor_banner_text_banner = true;
clicksor_layer_border_color = '#A0D000';
clicksor_layer_ad_bg = '#FFFFFF'; clicksor_layer_ad_link_color = '#000000';
clicksor_layer_ad_text_color = '#666666'; clicksor_text_link_bg = '';
clicksor_text_link_color = '#3cff73'; clicksor_enable_text_link = true;
clicksor_layer_banner = false;
</script>
<script type="text/javascript" src="http://b.clicksor.net/show.php?nid=1&amp;pid=392686&amp;adtype=6&amp;sid=655863&amp;float=1"></script>


    <script type='text/javascript' src='//p310774.clksite.com/adServe/banners?tid=310774_605546_3&type=floating_banner&size=6&position=center'></script>
    <script type="text/javascript">
    var infolinks_pid = 3124367;
    var infolinks_wsid = 0;
    </script>
    <script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>

    <script type="text/javascript">
    ( function() {
    if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
    var unit = {"calltype":"async[2]","publisher":"almohamady7","width":550,"height":250,"sid":"Chitika Default"};
    var placement_id = window.CHITIKA.units.length;
    window.CHITIKA.units.push(unit);
    document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
    }());
    </script>
    <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
</body>
</html>
