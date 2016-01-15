@extends('layouts.dashboard')

@section('title','Edit This Post')
@section('page_heading','Edit this post')

@section('section')
	
	<div class="col-sm-12">
		<div class="row">

			{!! Form::open(array('url' => 'dashboard/admin/simpanedit/'.$post->id, 'files' => true)) !!}

				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" required name="judul" value="{{$post->title}}">
				</div>

				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi" cols="30" rows="10" class="form-control" required name="isi">{{$post->content}}</textarea>
				</div>

        <div class="form-group">
            <label>Gambar Artikel</label>
            <input type="file" name="gambar">
        </div>

				<button class="btn btn-default pull-right" type="submit">Post</button>

			{!! Form::close() !!}

		</div>
	</div>

@endsection