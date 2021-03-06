<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dc Comics -@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	@include('partials.header')
	<main>
		@yield('hero')
		@yield('content')
		@yield('menu')
	</main>
	@include('partials.footer')
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>