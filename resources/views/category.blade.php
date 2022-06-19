@extends('layout.main')

@section('container')

    <h3>All Category : {{ $name }}</h3>

    <div class="row">
        @foreach($post as $p)
            <div class="col-md-4 mt-4">
                <div class="card" style="width: 20rem;">
                    @if($p->image)
                        <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top" alt=" $name } }}">
                    @else
                        <img src="https://source.unsplash.com/random/300x300?{{ $name }}" class="card-img-top" alt="{{ $name }}">
                    @endif
                    <div class="card-body justify-content-center">
                        <h4><a class="text-decoration-none" href="/posts/{{ $p->slug }}">{{ $p->title  }}</a></h4>
                        <p>By {{ $p->author }} in <strong>{{ $p->categories->name }}</strong></p>
                        <p class="card-text">{{ $p->excerpt }}</p>
                        <p><a class="text-decoration-none ms-3" href="/posts/{{ $p->slug }}">Read More...</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection