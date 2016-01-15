@extends('layouts.dashboard')

@section('title','Post Artikel Baru')
@section('page_heading','Post Artikel Baru')

@section('section')

	<div class="col-sm-12">
		<div class="row">

			{!! Form::open(array('url' => 'dashboard/sekolah/simpanpost', 'files' => true)) !!}

				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" required name="judul">
				</div>

				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi" cols="30" rows="10" class="form-control" required name="isi"></textarea>
				</div>

        <div class="form-group">
            <label>Gambar Artikel</label>
            <input type="file" required name="gambar">
        </div>

				<button class="btn btn-default pull-right" type="submit">Post</button>

			{!! Form::close() !!}

		</div>
	</div>

@endsection