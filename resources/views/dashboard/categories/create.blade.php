@extends('dashboard.layout.main')

@section('content')

    <form action="/dashboard/categories" method="post">
        @csrf 
        <div class="mb-3">
            <label for="name_categories" class="form-label">Name Category</label>
            <input type="text" class="form-control" id="name_categories" name="name_categories" placeholder="Name Category" required>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Submit Post</button>
        </div>
    </form>
   
@endsection