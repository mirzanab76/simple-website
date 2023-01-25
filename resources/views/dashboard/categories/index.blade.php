@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">All Categories</h1>
</div>

@if(session()->has('success'))
    
<div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive">
  <a href="/dashboard/posts/create" class="btn btn-primary mt-1 mb-3">Create new category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td >
            <a class="badge bg-warning" href="/dashboard/categories/{{ $category->slug }}/edit"><span data-feather="edit" class="align-text-bottom"></span></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf

              <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection