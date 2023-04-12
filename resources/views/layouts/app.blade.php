<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'VPN') }}</title>
	@vite('resources/css/app.css')
	<script src="{{ asset('assets/js/polyfills.js') }}"></script>
	<script src="{{ asset('assets/js/webpack.js') }}"></script>
</head>
<body>
<div id="app">

	<x-header/>

	<main>
		@yield('content')
	</main>

	<x-footer/>
</div>
</body>
</html>
