@extends('layouts.dashboard')

@section('title','Welcome to Dashboard')
@section('page_heading','Ubah Informasi')

@section('section')

	<div class="col-sm-12">
        {!! Form::open(array('url'=>'dashboard/sekolah/simpaninfo', 'files' => true)) !!}
		<div class="row">

			<div class="col-lg-6">
				<img src="{{ asset('img/sekolah/'.Auth::user()->id.'.jpg') }}" alt="" style="width:100%">
				
				<div class="col-lg-12 row">
					<div class="form-group">
						<label>Ganti Gambar</label>
	            		<input type="file" name="gambar">
					</div>
				</div>
			</div>

			<div class="col-lg-6">
	            <div class="form-group">
	                <label>Nama Sekolah</label>
	                <input class="form-control" placeholder="Enter text" name="nama_sekolah" value="{{ $sekolah->nama_sekolah }}">
	            </div>

	            <div class="form-group">
	                <label>Jenjang</label>
	                <select class="form-control" name="jenjang">
	                    <option>SD</option>
	                    <option>MIN</option>
	                    <option>SMP</option>
	                    <option>MTS</option>
	                    <option>SMA</option>
	                    <option>5MK</option>
	                </select>
	            </div>


	            <div class="form-group">
	                <label>Tipe </label>
	                <label class="radio-inline">
	                    <input type="radio" name="tipe" id="optionsRadiosInline1" value="swasta" checked>Swasta
	                </label>
	                <label class="radio-inline">
	                    <input type="radio" name="tipe" id="optionsRadiosInline2" value="negeri">Negeri
	                </label>
	            </div>

	        </div>

	        <div class="col-lg-6">

	            <div class="form-group">
	                <label>Alamat</label>
	                <input class="form-control" placeholder="Enter text" name="alamat" value="{{ $sekolah->alamat }}">
	            </div>

	            <div class="form-group">
	                <label>Kota</label>
	                <input class="form-control" placeholder="Enter text" name="kota" value="{{ $sekolah->kota }}">
	            </div>

	            <div class="form-group">
	                <label>Provinsi</label>
	                <input class="form-control" placeholder="Enter text" name="provinsi" value="{{ $sekolah->provinsi }}">
	            </div>
	        </div>

		    <div class="col-lg-6">

				<div class="form-group">
	                <label>Profil</label>
	                <textarea class="form-control" rows="15" name="profil">{{ $sekolah->profil }}</textarea>
       			</div>
		        
	        </div>

		    <div class="col-lg-6">

				<div class="form-group">
	                <label>Fasilitas</label>
	                <?php
	                	$fasilitas = explode('#',$sekolah->fasilitas);
	                ?>
	                <textarea class="form-control" rows="15" name="fasilitas">@foreach($fasilitas as $f){{ trim($f,' ') }}@endforeach</textarea>
       			</div>

       		</div>

		    <div class="col-lg-6">

				<div class="form-group">
	                <label>Prestasi</label>
	                <?php
	                	$prestasi = explode('#',$sekolah->prestasi);
	                ?>
	                <textarea class="form-control" rows="15" name="prestasi">@foreach($prestasi as $p){{ trim($p,' ') }}@endforeach</textarea>
       			</div>

       		</div>

		    <div class="col-lg-6">

				<div class="form-group">
	                <label>Biaya</label>
	                <?php
	                	$biaya = explode('#',$sekolah->biaya);
	                ?>
	                <textarea class="form-control" rows="15" name="biaya">@foreach($biaya as $b){{ trim($b,' ') }}@endforeach</textarea>
       			</div>

       		</div>

		    <div class="col-lg-6">

				<div class="form-group">
	                <label>Kegiatan</label>
	                <?php
	                	$kegiatan = explode('#',$sekolah->kegiatan);
	                ?>
	                <textarea class="form-control" rows="15" name="kegiatan">@foreach($kegiatan as $k){{ trim($k,' ') }}@endforeach</textarea>
       			</div>

       		</div>
        </div>


   		<button type="submit" class="btn btn-default">Simpan</button>

        {!! Form::close() !!}
    </div>

@endsection