@extends('layouts.main')

@section('container')
<h1 class="mb-5">Category : {{ $category }}</h1>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title">{{ $posts[0]->title }}</h3>
      <p>
        <small class="text-body-secondary">by:  <a href="/portofolio/user/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/portofolio/category/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/portofolio/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
    </div>
  </div>
@else
<p class="text-center fs-4">No Post Found.</p>
@endif

<div class="container">
    <div class="row">
        @foreach ( $posts->skip(1) as $post )
        <div class="col-md-4 mb-3">
            <div class="card">
              <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)">{{ $post->category->name }}</div>
                <img src="https://source.unsplash.com/500x500/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <small class="text-body-secondary">by:  <a href="/portofolio/user/{{ $post->user->username }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/portofolio/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


@endsection