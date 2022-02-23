@extends('layout.main')

@section('container')

    @foreach($about as $a)
        <h6>Nama : {{ $a->name }}</h6>
        <h6>Umur : {{ $a->age }}</h6>
        <h6>Alamat : {{ $a->address }}</h6>
        <p>About Me : {{ $a->aboutMe }}</p>
    @endforeach

@endsection('container')