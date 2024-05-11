@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

<h1 class="mb-5">{{ $post->title }}</h1>
<p>by:  <a href="#">{{ $post->user->name }}</a> in <a href="/portofolio/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

@if ($post->image)
<div>
    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
</div>
@else
<img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
@endif

<article class="my-3 fs-5">
{!! $post->body !!}
</article>

<p><a href="/portofolio/category/{{ $post->category->slug }}" class="btn btn-primary mt-3">View More in {{ $post->category->name }}</a></p>
<a href="/portofolio" class="btn btn-secondary">See Other Portofolio</a>
@endsection