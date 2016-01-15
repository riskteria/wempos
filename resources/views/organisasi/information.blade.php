@extends('layouts.dashboard')

@section('title','Welcome to Dashboard')
@section('page_heading','Ubah Informasi')

@section('section')

	<div class="col-sm-12">
        {!! Form::open(array('url'=>'dashboard/organisasi/simpaninfo', 'files' => true)) !!}
		<div class="row">

			<div class="col-lg-6">
				<img src="{{ asset('img/organisasi/'.Auth::user()->id.'.jpg') }}" alt="" style="width:100%">
				
				<div class="col-lg-12 row">
					<div class="form-group">
						<label>Ganti Gambar</label>
	            		<input type="file" name="gambar">
					</div>
				</div>
			</div>

			<div class="col-lg-12">
	            <div class="form-group">
	                <label>Nama Organisasi</label>
	                <input class="form-control" placeholder="Enter text" name="nama_sekolah" value="{{ $user->display_name }}">
	            </div>

	        </div>

		    <div class="col-lg-6">

				<div class="form-group">
	                <label>Profil</label>
	                <textarea class="form-control" rows="15" name="profil">{{ $sekolah->profil }}</textarea>
       			</div>
		        
	        </div>

		    
        </div>


   		<button type="submit" class="btn btn-default">Simpan</button>

        {!! Form::close() !!}
    </div>

@endsection