@extends('dashboard.layout.main')

@section('content')

    <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title Post" require>
        </div>
        <div class="mb-3">
            <label for="categories_id" class="form-label">Post Category</label>
            <select class="form-select" aria-label="Default select example" name="categories_id" require>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image">Post Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <label for="category" class="form-label">Category Post</label>
        <div class="mb-3">
            <label for="text-editor">Body</label>
            <input type="hidden" id="text-editor" name="body" req>
            <trix-editor input="text-editor"></trix-editor>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Submit Post</button>
        </div>
    </form>
   
@endsection