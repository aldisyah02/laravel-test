@extends('dashboard.layouts.main')

@section('container')

<div class="container row mb-5">
    <div class="row my-4">
        <div class="col-lg-8"></div>
            <div class="mb-3"><h2>Judul : {{ $post -> title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-warning"><span data-feather="edit"></span> Edit this post</a>
            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-danger"><span data-feather="trash-2"></span> Delete this</a>
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid rounded mt-3" srcset="">

            <article class="my-3 fs-5"></article>
            {!! $post -> body !!}
        </div>
    </div>
</div>

@endsection