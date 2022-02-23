@extends('layout.main')

@section('container')

    @foreach($body as $b) 
        <article>
            <h3>{{ $b->title }}</h3>
            {!! $b->body !!}
        </article>
    @endforeach

@endsection('container')

