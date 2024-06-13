@extends('layout')

@section('mycontent')
    <h1>SHOW ALL BLOGS...</h1>
    <hr>

    @foreach ($abc as $data)
        <h1>{{ $data['blogtitle'] }} - {{ $data['blogauthor'] }} - {{ $data['blogcontent'] }}</h1>
    @endforeach
@endsection
