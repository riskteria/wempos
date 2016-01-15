@extends('layouts.dashboard')

@section('title','Welcome to Dashboard')
@section('page_heading','Articles')

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
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->User->display_name }}</td>
                    <td>{{ date('d M Y', strtotime($article->updated_at)) }}</td>
                    <td><a><span class="fa fa-pencil"> </span></a></td>
                    <td><a href="{{ url('dashboard/sekolah/deletepost/'.$article->id)}}"><span class="fa fa-trash"> </span></a></td>
                </tr>

            @endforeach
        </tbody>
    </table>

@endsection