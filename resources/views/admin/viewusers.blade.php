@extends('layouts.dashboard')

@section('title','Welcome to Dashboard')
@section('page_heading','users')

@section('section')

	<table class="table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Role</th>
				<th>Dibuat pada</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->display_name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->role }}</td>
					<td>{{ date('d M Y', strtotime($user->updated_at)) }}</td>
					<td><a href="{{ url('admindelete/user/'.$user->id)}}"><span class="fa fa-trash"> </span></a></td>
				</tr>

			@endforeach
		</tbody>
	</table>

@endsection