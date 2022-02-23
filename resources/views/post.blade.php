@extends('layout.main')

@section('container')

    <h2>{{ $post->title}}</h2>
    <p>by {{ $post->author }} in <a href="/category/{{ $post->categories->slug }}">{{ $post->categories->name }}</a></p>
    {!! $post->body !!}

    <a href="/posts">Back to posts</a>

@endsection
