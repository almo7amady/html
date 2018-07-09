@extends('layouts.guest')


@section('head')
	<title>{{ $submission->title }} - Case Root</title>
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{ $submission->title }} - Case Root" />
	<meta property="og:url" content="{{ config('app.url') }}/c/{{ $submission->channel_name }}/{{ $submission->slug }}" />
	<meta property="og:site_name" content="Case Root" />

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@elmo7amady" />
	<meta name="twitter:title" content="{{ $submission->title }} - Case Root" />

	@if ($submission->type == "text")
		<meta name="description" content="{{ $submission->data['text'] }}"/>
		<meta property="og:description" content="{{ $submission->data['text'] }}" />
		<meta name="twitter:description" content="{{ $submission->data['text'] }}" />
		<meta property="og:image" content="/imgs/cr-logo.png">
		<meta name="twitter:image" content="/imgs/cr-logo.png" />
	@else
		<meta property="og:image" content="{{ $submission->data['thumbnail'] ?? $submission->data['path'] ?? '/imgs/cr-logo.png' }}" />
		<meta name="twitter:image" content="{{ $submission->data['thumbnail'] ?? $submission->data['path'] ?? '/imgs/cr-logo.png' }}" />
	@endif
@stop


@section('content')
	<router-view></router-view>
@endsection


@section('script')
	<script>
		var preload = {
			submission: {!! json_encode($submission->resolve()) !!}, 
			channel: {!! json_encode($channel->resolve()) !!}
		};
	</script>
@endsection