@extends('layout.main')

@section('container')
    <h3>Category : {{ $name }}</h3>
    @foreach($post as $p)
        <h4><a href="/posts/{{ $p->slug }}">{{ $p->title  }}</a></h4>
        <p>{{ $p->body }}</p>
    @endforeach
@endsection