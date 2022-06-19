@extends('dashboard.layout.main')

@section('content')
  <a href="/dashboard/categories/create" class="text-decoration-none btn btn-primary btn-sm mb-2">Create New Category</a>
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
              <th scope="col">Name Category</th>
              <th scope="col">Slug Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>  
              {{ $no = 1 }}
              @foreach($categories as $category) 
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-center">{{ $category->name_categories }}</td>
                    <td class="text-center">{{ $category->slug }}</td>
                    <td style="width:200px;" class="text-center">
                        <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning btn-sm">
                            <span data-feather="file"></span>
                            Edit
                        </a> |

                        <form action="" method="post" class="d-inline">
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