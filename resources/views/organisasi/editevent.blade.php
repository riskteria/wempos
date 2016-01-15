@extends('layouts.dashboard')

@section('title','Post Event Baru')
@section('page_heading','Post Event Baru')

@section('section')

	<div class="col-sm-12">
		<div class="row">

			{!! Form::open(array('url' => 'dashboard/organisasi/simpanedit/'.$event->id, 'files' => true)) !!}

				<div class="form-group">
					<label>Judul</label>
					<input type="text" class="form-control" required name="judul" value="{{$event->title}}">
				</div>

				<div class="form-group">
					<label>Batas Waktu</label>

					<div class="row">

						<div class="col-sm-4">
							<select name="tanggal" required class="form-control">
								<option>Tanggal</option>
								@for($i=1; $i<=30; $i++)
									<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
						</div>

						<div class="col-sm-4">
							<select name="bulan" required class="form-control">
								<option>Bulan</option>
								@for($i=1; $i<=12; $i++)
									<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
						</div>

						<div class="col-sm-4">
							<select name="tahun" required class="form-control">
								<option>Tahun</option>
								@for($i=2015; $i<=2020; $i++)
									<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Lokasi</label>
					<input type="text" name="lokasi" required class="form-control" value="{{$event->location}}">
				</div>

				<div class="form-group">
					<label>Isi</label>
					<textarea name="isi" cols="30" rows="10" class="form-control" required name="isi">{{$event->description}}</textarea>
				</div>
				

		        <div class="form-group col-sm-12">
		        	<div class="col-sm-6">
		        		<img src="{{ asset('img/event/'.$event->id.'.jpg') }}" alt="" style="width:100%">
	        		</div>
		            <label>Ganti Banner</label>
		            <input type="file" name="gambar">
		        </div>

				<button class="btn btn-default pull-right" type="submit">Post</button>

			{!! Form::close() !!}

		</div>
	</div>

@endsection