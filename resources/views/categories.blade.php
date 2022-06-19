@extends('layout.main')

@section('container')

    <h2 class="mb-3">All Categories</h2>
    
    <div class="row">
    @foreach($categories as $category)
            <div class="col-3">
                <div class="card text-dark bg-primary mb-4" style="max-width: 16rem;">
                    <img src="https://source.unsplash.com/random/900×700?{{ $category->slug }}" class="card-img-top" alt="{{ $category->slug }}">
                    <div class="card-header"><a href="/category/{{ $category->slug }}" class="text-decoration-none text-white">{{ $category->name  }}</a></div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->slug  }}</h5>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
@endsection                 