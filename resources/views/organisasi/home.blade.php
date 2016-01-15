@extends('layouts.dashboard')

@section('title','Welcome to Dashboard')
@section('page_heading','Events')

@section('section')

    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pemilik</th>
                <th>Batas Akhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->User->display_name }}</td>
                    <td>{{ date('d M Y', strtotime($event->due_date)) }}</td>
                    <td><a href="{{ url('dashboard/organisasi/editevent/'.$event->id)}}"><span class="fa fa-pencil"> </span></a></td>
                    <td><a href="{{ url('dashboard/organisasi/deleteevent/'.$event->id)}}"><span class="fa fa-trash"> </span></a></td>
                </tr>

            @endforeach
        </tbody>
    </table>

@endsection