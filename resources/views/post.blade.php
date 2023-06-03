@extends('layouts.main')

@section('container')

    <h2>Judul : {{ $post -> title }}</h2>
    <h5>Author : {{ $post -> author }}</h5>
    {!! $post -> body !!}

    <a href="/posts/">Back to Posts</a>
@endsection