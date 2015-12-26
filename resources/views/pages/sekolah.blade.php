@extends('layouts.master')

@section('title') Daftar Sekolah :: {{ $jenis }} @endsection

@section('content')

	<div class="main-section emptiness">

		@if(Request::is('sekolah/sd'))
			{{ "ddsgsddsh" }}
		@else
			{{ "ooo" }}
		@endif

	</div>

	@include('partials.footer')

@endsection