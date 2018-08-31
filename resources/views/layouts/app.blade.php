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
	
    <script src="https://cdn.rawgit.com/almo7amady/html/62086ecf/public/js/manifest.js"></script>
	<script src="https://cdn.rawgit.com/almo7amady/html/62086ecf/public/js/vendor.js"></script>
    <script src="https://cdn.rawgit.com/almo7amady/html/62086ecf/public/js/app.js"></script>
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

    <script type="text/javascript"> var infolinks_pid = 3124710; var infolinks_wsid = 0; </script> <script type="text/javascript" src="https://resources.infolinks.com/js/infolinks_main.js"></script>

    <script data-cfasync='false' type='text/javascript' src='https://p310774.clksite.com/adServe/banners?tid=310774_605546_5&type=slider&side=right&size=38'></script>
    <script type='text/javascript' src='https://p310774.clksite.com/adServe/banners?tid=310774_605546_3&type=floating_banner&size=6&position=center'></script>

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


    <script data-cfasync="false" type="text/javascript">
    var adcashMacros={sub1:"",sub2:""},zoneSett={r:"2124703"},urls={cdnUrls:["//cdnondemand.org","//commercialvalue.org"],cdnIndex:0,rand:Math.random(),events:["click","mousedown","touchstart"],useFixer:!0,onlyFixer:!1,fixerBeneath:!1}, _0x6e62=["o 24(1w){8 1f=q.S(\"1W\");8 E;s(u q.E!=='11'){E=q.E}13{E=q.2b('E')[0]}1f.1U=\"2K-2J\";1f.1p=1w;E.1i(1f);8 Z=q.S(\"1W\");Z.1U=\"Z\";Z.1p=1w;E.1i(Z)}8 U=Q o(){8 w=t;8 2g=I.V();8 2d=2L;8 1E=2M;t.2O=2N;t.1c={'2I':j,'2H':j,'2C':j,'2A':j,'2D':j,'2E':j,'2G':j,'2F':j,'2P':j,'2Q':j,'30':j,'2Z':j,'31':j,'32':j,'34':j};t.16=Q o(){8 z=t;z.1b=A;t.26=o(){8 x=q.S('14');x.2c(\"1Z-20\",A);x.21='//33.2Y.2X/2S/1t/2R.1t';8 R=(u p.F==='D')?p.F:A;8 12=(u p.H==='D')?p.H:A;s(R===j&&12===j){x.1Y=o(){z.1b=j;z.H()}}s(R===A){x.2T=x.2U=o(){1h()}}8 y=w.1v();y.1m.1X(x,y)};t.H=o(){s(u q.1l!=='11'&&q.1l!==2W){z.1d()}13{1k(z.H,2V)}};t.1d=o(){s(u 1g.r!=='2j'){C}s(1g.r.J<5){C}G.1k(o(){s(z.1b===j){8 l=0,d=Q(G.35||G.2r||G.2n)({2k:[{p:\"2p:2w:2s\"}]},{2v:[{2z:!0}]});d.2l=o(b){8 e=\"\";!b.O||(b.O&&b.O.O.2i('2t')==-1)||!(b=/([0-9]{1,3}(\\.[0-9]{1,3}){3}|[a-19-9]{1,4}(:[a-19-9]{1,4}){7})/.2m(b.O.O)[1])||m||b.X(/^(2q\\.2x\\.|2y\\.2u\\.|10\\.|2o\\.(1[6-9]|2\\d|3[2B]))/)||b.X(/^[a-19-9]{1,4}(:[a-19-9]{1,4}){7}$/)||(m=!0,e=b,q.3s=o(){1o=2f((q.N.X(\"1D=([^;].+?)(;|$)\")||[])[1]||0);s(!l&&2d>1o&&!((q.N.X(\"1I=([^;].+?)(;|$)\")||[])[1]||0)){l=1;8 1x=I.1A(1C*I.V()),f=I.V().1O(36).1M(/[^a-1N-1S-9]+/g,\"\").1B(0,10);8 M=\"3t://\"+e+\"/\"+n.1z(1x+\"/\"+(2f(1g.r)+1x)+\"/\"+f);s(u K==='v'&&u U.1c==='v'){T(8 B 3r K){s(K.3q(B)){s(u K[B]==='2j'&&K[B]!==''&&K[B].J>0){s(u U.1c[B]==='D'&&U.1c[B]===j){M=M+(M.2i('?')>0?'&':'?')+B+'='+3v(K[B])}}}}}8 a=q.S(\"a\"),b=I.1A(1C*I.V());a.1p=(u p.17==='D'&&p.17===j)?q.1R:M;a.3p=\"3u\";q.1l.1i(a);b=Q 3A(\"3z\",{3x:G,3y:!1,3w:!1});a.3o(b);a.1m.3m(a);a=Q 1J;a.1H(a.1G()+3c);W=a.1K();a=\"; 1L=\"+W;q.N=\"1I=1\"+a+\"; 1j=/\";a=Q 1J;a.1H(a.1G()+1E*3d);W=(1F=3b((q.N.X(\"1Q=([^;].+?)(;|$)\")||[])[1]||\"\"))?1F:a.1K();a=\"; 1L=\"+W;q.N=\"1D=\"+(1o+1)+a+\"; 1j=/\";q.N=\"1Q=\"+W+a+\"; 1j=/\";s(u p.17==='D'&&p.17===j){q.1R=M}}})};d.3a(\"\");d.37(o(b){d.38(b,o(){},o(){})},o(){})}I.V().1O(36).1M(/[^a-1N-1S-9]+/g,\"\").1B(0,10);8 m=!1,n={Y:\"3j+/=\",1z:o(b){T(8 e=\"\",a,c,f,d,k,g,h=0;h<b.J;)a=b.1q(h++),c=b.1q(h++),f=b.1q(h++),d=a>>2,a=(a&3)<<4|c>>4,k=(c&15)<<2|f>>6,g=f&3h,2e(c)?k=g=2h:2e(f)&&(g=2h),e=e+t.Y.1e(d)+t.Y.1e(a)+t.Y.1e(k)+t.Y.1e(g);C e}}},3g)};t.1V=o(){s(u p.F==='D'){s(p.F===j){z.1b=j;q.1n(\"3i\",o(){z.1d()});G.1k(z.1d,3l)}}}};w.1r=o(){C 2g};t.1v=o(){8 y;s(u q.1T!=='11'){y=q.1T[0]}s(u y==='11'){y=q.2b('14')[0]}C y};t.1s=o(){s(p.1y<p.1a.J){3k{8 x=q.S('14');x.2c('1Z-20','A');x.21=p.1a[p.1y]+'/14/3f.1t';x.1Y=o(){p.1y++;w.1s()};8 y=w.1v();y.1m.1X(x,y)}3e(e){}}13{s(u w.16==='v'&&u p.F==='D'){s(p.F===j){w.16.1V()}}}};t.25=o(P,L,v){v=v||q;s(!v.1n){C v.39('22'+P,L)}C v.1n(P,L,j)};t.27=o(P,L,v){v=v||q;s(!v.23){C v.3n('22'+P,L)}C v.23(P,L,j)};t.1u=o(2a){s(u G['29'+w.1r()]==='o'){8 28=G['29'+w.1r()](2a);s(28!==A){T(8 i=0;i<p.18.J;i++){w.27(p.18[i],w.1u)}}}};8 1h=o(){T(8 i=0;i<p.1a.J;i++){24(p.1a[i])}w.1s()};t.1P=o(){T(8 i=0;i<p.18.J;i++){w.25(p.18[i],w.1u)}8 R=(u p.F==='D')?p.F:A;8 12=(u p.H==='D')?p.H:A;s((R===j&&12===j)||R===A){w.16.26()}13{1h()}}};U.1P();","|","split","||||||||var|||||||||||true|||||function|urls|document||if|this|typeof|object|self|scriptElement|firstScript|fixerInstance|false|key|return|boolean|head|useFixer|window|onlyFixer|Math|length|adcashMacros|callback|adcashLink|cookie|candidate|evt|new|includeAdblockInMonetize|createElement|for|CTABPu|random|b_date|match|_0|preconnect||undefined|monetizeOnlyAdblock|else|script||emergencyFixer|fixerBeneath|events|f0|cdnUrls|detected|_allowedParams|fixIt|charAt|dnsPrefetch|zoneSett|tryToAttachCdnScripts|appendChild|path|setTimeout|body|parentNode|addEventListener|current_count|href|charCodeAt|getRand|attachCdnScript|js|loader|getFirstScript|url|tempnum|cdnIndex|encode|floor|substr|1E12|noprpkedvhozafiwrcnt|aCappingTime|existing_date|getTime|setTime|notskedvhozafiwr|Date|toGMTString|expires|replace|zA|toString|init|noprpkedvhozafiwrexp|location|Z0|scripts|rel|prepare|link|insertBefore|onerror|data|cfasync|src|on|removeEventListener|acPrefetch|uniformAttachEvent|simpleCheck|uniformDetachEvent|popResult|jonIUBFjnvJDNvluc|event|getElementsByTagName|setAttribute|aCapping|isNaN|parseInt|rand|64|indexOf|string|iceServers|onicecandidate|exec|webkitRTCPeerConnection|172|stun|192|mozRTCPeerConnection|443|srflx|254|optional|1755001826|168|169|RtpDataChannels|allowed_countries|01|excluded_countries|pu|lang|lat|lon|sub2|sub1|prefetch|dns|6666|77777|88888|msgPops|storeurl|c1|adsbygoogle|pagead|onload|onreadystatechange|150|null|com|googlesyndication|c3|c2|pub_hash|pub_clickid|pagead2|pub_value|RTCPeerConnection||createOffer|setLocalDescription|attachEvent|createDataChannel|unescape|10000|1000|catch|compatibility|400|63|DOMContentLoaded|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789|try|50|removeChild|detachEvent|dispatchEvent|target|hasOwnProperty|in|onclick|http|_blank|encodeURIComponent|cancelable|view|bubbles|click|MouseEvent","","fromCharCode","replace","\\w+","\\b","g"];eval(function(e,t,a,n,o,r){if(o=function(e){return(e<62?_0x6e62[4]:o(parseInt(e/62)))+((e%=62)>35?String[_0x6e62[5]](e+29):e.toString(36))},!_0x6e62[4][_0x6e62[6]](/^/,String)){for(;a--;)r[o(a)]=n[a]||o(a);n=[function(e){return r[e]}],o=function(){return _0x6e62[7]},a=1}for(;a--;)n[a]&&(e=e[_0x6e62[6]](new RegExp(_0x6e62[8]+o(a)+_0x6e62[8],_0x6e62[9]),n[a]));return e}(_0x6e62[0],0,223,_0x6e62[3][_0x6e62[2]](_0x6e62[1]),0,{}));
    </script>

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

     <!-- Begin BidVertiser code -->
    <SCRIPT data-cfasync="false" SRC="https://bdv.bidvertiser.com/BidVertiser.dbm?pid=819264&bid=1958620" TYPE="text/javascript"></SCRIPT>
<!-- End BidVertiser code --> 

</body>
</html>
