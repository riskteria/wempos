<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opps Halaman Tidak Ditemukan</title>
	<link rel="icon"       href="{{ asset('img/wempos-logo.png') }}">
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<style type="text/css">
		h1 {
			font-size: 7rem;
			letter-spacing: 1rem;
			font-weight: bold;
		}

		h1, h3, h6 {
			color: #555;
		}

		.row {
			padding: 0.5rem 0;
		}
	</style>

</head>
<body>
	
	<div class="full-width columns">
		<div class="row">
			<h1 class="center">404</h1>
		</div>
		<div class="row">
			<h3 class="center">Opps halaman tidak ditemukan</h3>
		</div>
		<div class="row">
			<h6 class="center">Kembali ke <a href="{{ url('/') }}">Halaman Awal</a></h6>
		</div>
	</div>

</body>
</html>