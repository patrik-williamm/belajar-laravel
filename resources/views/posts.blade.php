@extends('layout.main')

@section('container')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="/posts">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card text-center mt-3 mb-2" style="width: 20rem;">
                @if($post->image)
                    <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt="">
                @else
                    <img src="https://source.unsplash.com/random/300x280?{{ $post->categories->name }}" class="card-img-top" alt="">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="card-link text-decoration-none">{{ $post->title }}</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">By {{ $post->author }} in {{ $post->categories->name }} {{ $post->created_at->diffForHumans() }}</h6>
                    <p class="card-text">{!! $post->excrept !!}</p>
                    <a href="/posts/{{ $post->slug }}" class="card-link text-decoration-none">Read More...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $posts->links() }}
@endsection('container')
