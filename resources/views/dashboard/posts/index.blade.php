@extends('dashboard.layout.main')

@section('content')
  <a href="/dashboard/posts/create" class="text-decoration-none btn btn-primary btn-sm mb-2">Create New Post</a>
  @if (session()->has('status'))

    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>  

  @endif
  <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr class="text-center">
              <th scope="col">Id</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>   
            @foreach($posts as $post)
                <tr>
                    <td class="text-center">{{ $id++ }}</td>
                    <td class="text-center">{{ $post->title }}</td>
                    <td class="text-center">{{ $post->categories->name }}</td>
                    <td style="width:200px;" class="text-center">
                        <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-success btn-sm">
                        <span data-feather="file"></span>
                            Detail
                        </a> |

                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm">
                            <span data-feather="file"></span>
                            Edit
                        </a> |

                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are You Sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div> 
@endsection