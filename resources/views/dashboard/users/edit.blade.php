@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new users</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/users/{{ $user->id }}" class="mb-3" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name',$user->name) }}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username',$user->username) }}">
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email',$user->email) }}">
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="admin" class="form-label">Admin</label>
      <div class="form-check">
        <input class="form-check-input @error('is_admin') is-invalid @enderror" type="radio" name="is_admin" id="adminTrue" value="1" >
        <label class="form-check-label" for="adminTrue">True</label>
      </div>
      <div class="form-check">
        <input class="form-check-input @error('is_admin') is-invalid @enderror" type="radio" name="is_admin" id="adminFalse" value="0" checked>
        <label class="form-check-label" for="adminFalse">False</label>
      </div>
      @error('is_admin')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
</form>
</div>

@endsection