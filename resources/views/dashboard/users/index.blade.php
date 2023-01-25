@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">All Users</h1>
</div>

@if(session()->has('success'))
    
<div class="alert alert-success alert-dismissible fade show col-lg-10" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

 <div class="table-responsive ">
  <a href="/dashboard/users/create" class="btn btn-primary mt-1 mb-3">Create new user</a>
  {{--<div class="row mb-3 justify-content-center">
    <div class="col-6">
        <form action="/dashboard/users">

            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit" >Search</button>
            </div>
        </form>
    </div>
</div> --}}

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Admin</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->is_admin }}</td>
         <td >
            <a class="badge bg-warning" href="/dashboard/users/{{ $user->id }}/edit"><span data-feather="edit" class="align-text-bottom"></span></a>
            <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
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