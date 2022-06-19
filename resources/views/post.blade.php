@extends('layout.main')

@section('container')
    <div class="row col-md-8 offset-md-2">
        <h2>{{ $post->title}}</h2>
        <p>by {{ $post->author }} in <a href="/category/{{ $post->categories->slug }}">{{ $post->categories->name }}</a></p>
        @if($post->image)
            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="rounded">
        @else
            <img src="https://source.unsplash.com/random/1200x400?{{ $post->categories->name }}" alt="{{ $post->categories->slug }}" class="rounded">
        @endif
        <p>{!! $post->body !!}</p>
    
        <a href="/posts">Back to posts</a>
    </div>

@endsection
