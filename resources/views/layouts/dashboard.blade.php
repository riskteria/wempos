<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title> @yield('title') </title>

		<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
		<link rel="stylesheet" href="{{ asset('css/color-scheme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/material-login-form.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('icon/foundation-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
		<link rel="stylesheet" href="{{ asset('icon/font-awesome.css') }}">
		<link rel="icon"       href="{{ asset('img/wempos-logo.png') }}">

	</head>
	<body>
		
		<div id="wrapper">

			<!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      	@include('partials.dashboard.topbar')
      	@include('partials.dashboard.sidebar')
      </nav>

			<div id="page-wrapper">
				<div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">@yield('page_heading')</h1>
          </div>
          <!-- /.col-lg-12 -->
	      </div>
				<div class="row">  
					@yield('section')

        </div>
        <!-- /#page-wrapper -->
      </div>

		</div>
		
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/foundation.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
    <script src="{{ asset('js/vendor/motion-ui.js') }}"></script>
    <script src="{{ asset('js/vendor/slideUp.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/frontend.js') }}"></script>
	</body>
</html>