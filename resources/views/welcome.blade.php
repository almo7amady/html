@extends('layouts.app')


@section('content')
	<router-view></router-view>
@endsection


@section('head')
	<title>{{ config('app.title') }}</title>
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{ config('app.title') }}" />
	<meta property="og:url" content="{{ config('app.url') }}" />
	<meta property="og:site_name" content="{{ config('app.name') }}" />

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="{{ config('app.twitter_username') }}" />
	<meta name="twitter:title" content="{{ config('app.title') }}" />

	<meta name="description" content="{{ config('app.description') }}"/>
	<meta property="og:description" content="{{ config('app.description') }}" />
	<meta name="twitter:description" content="{{ config('app.description') }}" />
	<meta property="og:image" content="{{ config('app.url') }}/imgs/{{ config('app.logo') }}">
	<meta name="twitter:image" content="{{ config('app.url') }}/imgs/{{ config('app.logo') }}" />

	<script type="application/ld+json">
	 {
		 "@context": "http://schema.org",
		 "@type": "WebSite",
		 "url": "https://www.caseroot.com",
		 "name": "Case Root",
			"publisher": {
			 "@type": "Organization",
		  "logo": {
			  "@type": "ImageObject",
				 "url": "https://www.caseroot.com/imgs/favicon.png",
				 "name": "Case Root",
				 "height": "457",
				 "width": "457"
				}
			},
		 "sameAs": [
			 "https://www.facebook.com/caseroot",
			 "https://twitter.com/case-root"
		 ],
		 "potentialAction": {
			"@type": "SearchAction",
			"target": "https://www.caseroot.com/?search={search_term_string}",
			"query-input": "required name=search_term_string"
		 }
	 }
	 </script>

	<script type="application/ld+json">
	{
	  "@context":"http://schema.org",
	  "@type":"ItemList",
	  "itemListElement":[
		{
		  "@type":"SiteNavigationElement",
		  "position":1,
		  "name": "Hot",
		  "url":"https://www.caseroot.com/?sort=hot"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":2,
		  "name": "New",
		  "url":"https://www.caseroot.com/?sort=new"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":3,
		  "name": "Rising",
		  "url":"https://www.caseroot.com/?sort=rising"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":4,
		  "name": "#technology",
		  "url":"https://www.caseroot.com/c/technology"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":5,
		  "name": "#news",
		  "url":"https://www.caseroot.com/c/news"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":6,
		  "name": "#funny",
		  "url":"https://www.caseroot.com/c/funny"
		},
		{
		  "@type":"SiteNavigationElement",
		  "position":7,
		  "name": "#politics",
		  "url":"https://www.caseroot.com/c/politics"
		}
	  ]
	}
	</script>
@endsection
