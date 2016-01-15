@extends('layouts.dashboard')

@section('title','Welcome to Dashboard')
@section('page_heading','Activities')

@section('section')

	<table class="table">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Pemilik</th>
				<th>Diperbahaui</th>
			</tr>
		</thead>
		<tbody>
			@foreach($activities as $activity)
				<tr>
					<td>{{ $activity->title }}</td>
					<td>{{ $activity->User->display_name }}</td>
					<td>{{ date('d M Y', strtotime($activity->updated_at)) }}</td>
					<td><a><span class="fa fa-pencil"> </span></a></td>
					<td><a href="{{ url('admindelete/activity/'.$activity->id)}}"><span class="fa fa-trash"> </span></a></td>
				</tr>

			@endforeach
		</tbody>
	</table>

@endsection