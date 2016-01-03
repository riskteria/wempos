@extends('layouts.master')

@section('title') Daftar Sekolah ::  @endsection

@section('content')

	<div class="main-section emptiness">

		<section class="full-width content-section">
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<ul class="tabs" data-tab>

						@if(Request::is('sekolah/sd'))
							<li class="tab-title active"><a href="#tipe1">SD</a></li>
							<li class="tab-title"><a href="#tipe2">MIN</a></li>

						@elseif(Request::is('sekolah/smp'))
							<li class="tab-title active"><a href="#tipe1">SMP</a></li>
							<li class="tab-title"><a href="#tipe2">MTS</a></li>

						@elseif(Request::is('sekolah/smk'))
							<li class="tab-title active"><a href="#tipe1">SMA</a></li>
							<li class="tab-title"><a href="#tipe2">SMK</a></li>

						@endif
					</ul>
				</div>
				<!-- END 12 COLUMNS -->
			</div>
			<!-- END ROW -->
		</section>
		<!-- END SECTION.CONTENT-SECTION -->

		<div class="tabs-content">

      <div class="large-12 content active" id="tipe1">
        <div class="full-width">
        	<div class="row">
        		
        		@forelse($tipe1 as $tipe)
							{{ $tipe->provinsi }}
        		@empty
        			{{ "Tidak ada data" }}
        		@endforelse

        	</div>
        </div>
      </div>

      <div class="large-12 content" id="tipe2">
        <div class="full-width">
        	<div class="row">
        		
        		@forelse($tipe2 as $tipe)
							{{ $tipe->provinsi }}
        		@empty
        			{{ "Tidak ada data" }}
        		@endforelse
        		
        	</div>
        </div>
      </div>

    </div>

	</div>

	@include('partials.footer')

@endsection