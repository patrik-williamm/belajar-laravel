@extends('layout.main')

@section('container')

    <h2>Categories :</h2>
    @foreach($categories as $category)
        <h5><a href="/category/{{ $category->slug }}">{{ $category->name  }}</a></h5>
    @endforeach
@endsection