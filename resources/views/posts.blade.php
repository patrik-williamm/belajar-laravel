@extends('layout.main')

@section('container')

    @foreach($posts as $post)
        <h5><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
        <p>{{ $post->excrept }}</p>
    @endforeach

@endsection('container')
