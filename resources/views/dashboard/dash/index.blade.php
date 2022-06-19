@extends('dashboard.layout.main')

@section('content')
  <h2>Welcome back, {{ auth()->user()->name }}</h2>
  
@endsection