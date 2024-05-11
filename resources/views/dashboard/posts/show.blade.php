@extends('dashboard.layouts.main')

@section('container')

<div class="container">
<h1 class="mb-5">{{ $post->title }}</h1>

<a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to My Post</a>
<a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Delete Post?')"><span data-feather="trash"></span>Delete</button>
</form>

    @if ($post->image)
    <div style="overflow:hidden">
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
    @endif
    
    <article class="my-3 fs-5">
    {!! $post->body !!}
    </article>
    </div>
@endsection
