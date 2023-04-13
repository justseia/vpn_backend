<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'VPN') }}</title>
	@vite('resources/css/app.css')
	<link href="{{asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
	<link href="{{asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/libs/@iconscout/unicons/css/line.css')}}" rel="stylesheet"/>
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>
</head>
<body>
<div id="app">

	<x-header/>

	<main>
		@yield('content')
	</main>

	<x-footer/>
</div>

<script src="{{asset('assets/libs/tiny-slider/min/tiny-slider.js')}}"></script>
<script src="{{asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
<script src="{{asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

<script src="{{asset('assets/js/easy_background.js')}}"></script>
<script src="{{asset('assets/js/plugins.init.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>
