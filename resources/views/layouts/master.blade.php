<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title> @yield('title') </title>

		<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
		<link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
		<link rel="stylesheet" href="{{ asset('css/color-scheme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/material-login-form.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('icon/foundation-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('icon/font-awesome.css') }}">
		<link rel="icon"       href="{{ asset('img/wempos-logo.png') }}">

	</head>
	<body>
		
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">

				@include('partials.sidebar')
				@include('partials.topbar')
				@include('partials.loginmodal')
				@include('partials.signupmodal')

				@yield('content')

				<a class="exit-off-canvas"></a>

			</div>
		</div>
		
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/foundation.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
    <script src="{{ asset('js/vendor/motion-ui.js') }}"></script>
    <script src="{{ asset('js/vendor/slideUp.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
	@yield('scripts')

	</body>
</html>