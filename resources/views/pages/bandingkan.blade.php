@extends('layouts.master')

@section('title') Bandingkan Sekolah @endsection

@section('content')

	<div class="main-section emptiness">

		<div class="row">
      <div class="large-12 columns">
        <h3 class="center">Bandingkan 1 sekolah dengan 1 sekolah lainnya</h3>
        <h5 class="center">Pilih 2 sekolah untuk menampilkan perbandingannya</h5>
      </div>
    </div>

    <div class="row emptiness">
		
			{!! Form::open(array('url' => 'BandingProses', 'class' => 'comparation')) !!}

        <div class="medium-5 columns">
          <input type="search" name="cari1" class="small primary radius" id="autocomplete1" placeholder="Sekolah #1" 
          value="@if(isset($cari1)){{$cari1}}@endif">
        </div>
        <div class="medium-2 columns center">
          <input type="submit" value="Bandingkan" class="tiny button round">
        </div>
        <div class="medium-5 columns">
          <input type="search" name="cari2" class="small primary radius" id="autocomplete2" placeholder="Sekolah #" 
          value="@if(isset($cari2)){{$cari2}}@endif">
        </div>

      {!! Form::close() !!}

      @if(isset($sekolah1))

      <div class="large-12">
        <table role="grid" class="large-12 compare-table">
          <caption>
          	<h3 class="mdc-text-grey center">Hasil Perbandingan</h3>
          </caption>

          <tr>
            <td>@if(isset($sekolah1)){{ $sekolah1->jenjang }} @endif</td>
            <th>TIngkatan Sekolah</th>
            <td>@if(isset($sekolah2)){{ $sekolah2->jenjang }} @endif</td>
          </tr>

          <tr>
            <td>@if(isset($sekolah1)){{ $sekolah1->tipe }} @endif</td>
            <th>Tipe Sekolah</th>
            <td>@if(isset($sekolah2)){{ $sekolah2->tipe }} @endif</td>
          </tr>
          
          <tr>
            <td>
            	@if(isset($sekolah1))
            		<?php 
            			$fasilitas = array();
            			if($sekolah1->fasilitas != '')
            				$fasilitas = explode('#',$sekolah1->fasilitas);
            		?>
								<ul>
            		@forelse($fasilitas as $fasil)
            			<li>{{ $fasil }}</li>
            		@empty
            			{{ 'N/A' }}
            		@endforelse
								</ul>
            	@endif
            </td>

            <th>Fasilitas</th>
            
            <td>
            	@if(isset($sekolah2))
            		<?php 
            			$fasilitas = array();
            			if($sekolah2->fasilitas != '')
            				$fasilitas = explode('#',$sekolah2->fasilitas);
            		?>
								<ul>
            		@forelse($fasilitas as $fasil)
            			<li>{{ $fasil }}</li>
            		@empty
            			{{ 'N/A' }}
            		@endforelse
								</ul>
            	@endif
            </td>
          </tr>
          
          <tr>
            <td>
            	@if(isset($sekolah1))
            		<?php 
            			$prestasi = array();
            			if($sekolah1->prestasi != '')
            				$prestasi = explode('#',$sekolah1->prestasi);
            		?>
								<ul>
            		@forelse($prestasi as $pres)
            			<li>{{ $pres }}</li>
            		@empty
            			{{ 'N/A' }}
            		@endforelse
								</ul>
            	@endif
            </td>

            <th>Prestasi</th>
            
            <td>
            	@if(isset($sekolah2))
            		<?php 
            			$prestasi = array();
            			if($sekolah2->prestasi != '')
            				$prestasi = explode('#',$sekolah2->prestasi);
            		?>
								<ul>
            		@forelse($prestasi as $pres)
            			<li>{{ $pres }}</li>
            		@empty
            			{{ 'N/A' }}
            		@endforelse
								</ul>
            	@endif
            </td>
          </tr>
          
          <tr>
            <td>
            	@if(isset($sekolah1))
            		<?php 
            			$biaya = array();
            			if($sekolah1->biaya != '')
            				$biaya = explode('#',$sekolah1->biaya);
            		?>
								<ul>
            		@forelse($biaya as $bia)
            			<li>{{ $bia }}</li>
            		@empty
            			{{ 'N/A' }}
            		@endforelse
								</ul>
            	@endif
            </td>

            <th>Fasilitas</th>
            
            <td>
            	@if(isset($sekolah2))
            		<?php 
            			$biaya = array();
            			if($sekolah2->biaya != '')
            				$biaya = explode('#',$sekolah2->biaya);
            		?>
								<ul>
            		@forelse($biaya as $bia)
            			<li>{{ $bia }}</li>
            		@empty
            			{{ 'N/A' }}
            		@endforelse
								</ul>
            	@endif
            </td>
          </tr>
          
          <tr>
            <td>
            	@if(isset($sekolah1))
            		<?php 
            			$kegiatan = array();
            			if($sekolah1->kegiatan != '')
            				$kegiatan = explode('#',$sekolah1->kegiatan);
            		?>
								<ul>
            		@forelse($kegiatan as $kegiat)
            			<li>{{ $kegiat }}</li>
            		@empty
            			{{ 'N/A' }}
            		@endforelse
								</ul>
            	@endif
            </td>

            <th>Fasilitas</th>
            
            <td>
            	@if(isset($sekolah2))
            		<?php 
            			$kegiatan = array();
            			if($sekolah2->kegiatan != '')
            				$kegiatan = explode('#',$sekolah2->kegiatan);
            		?>
								<ul>
            		@forelse($kegiatan as $kegiat)
            			<li>{{ $kegiat }}</li>
            		@empty
            			{{ 'N/A' }}
            		@endforelse
								</ul>
            	@endif
            </td>
          </tr>

				</table>
			</div>

			@endif

    </div>

	</div>

	@include('partials.footer')

@endsection

@section('scripts')
	<script src="{{ asset('js/jquery.autocomplete.min.js') }}"></script>
	<script src="{{ asset('js/currency-autocomplete.js') }}"></script>
	<script></script>
@endsection