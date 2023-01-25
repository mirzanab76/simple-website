@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row  my-3">
        <div class="col-lg-8 ">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to all my posts </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"><span data-feather="edit" class="align-text-bottom"></span> Edit </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
  
                <button class="btn btn-danger  text-white" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
              </form>
            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3"  >
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>

            {{-- <a href="/posts" class="btn btn-danger d-block">Back</a> --}}

        </div>
    </div>
</div>
@endsection