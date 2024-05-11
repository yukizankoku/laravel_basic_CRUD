@extends('layouts.main')

@section('container')
<h1 class="mb-5 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    {{-- method get --}}
    <form action="/portofolio">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

<h2 class="mt-5">Category</h2>
<div class="container">
    <div class="row">
        @foreach ( $categories as $category )
        <div class="col-md-3">
          <a href="/portofolio/category/{{ $category->slug }}">
          <div class="card bg-dark text-white">
            <img src="https://source.unsplash.com/1200x400/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
            <div class="card-img-overlay d-flex align-item-center p-0">
              <h5 class="card-title text-center flex-fill p-5 fs-3" style="background-color:rgba(0,0,0,0.3)">{{ $category->name }}</h5>
            </div>
          </div>
           </a>  
        </div>
        @endforeach
    </div>
</div>

<h2 class="mt-5 mb-5">Our Portofolio</h2>

@if ($posts->count())
<div class="card mb-3">
    @if ($posts[0]->image)
    <div style="max-height: 350px; overflow:hidden">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="{{ $posts[0]->category->name }}">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif
    <div class="card-body text-center">
      <h3 class="card-title">{{ $posts[0]->title }}</h3>
      <p>
        <small class="text-body-secondary">by:  <a href="/portofolio/user/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/portofolio/category/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/portofolio/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
    </div>
  </div>

<div class="container">
    <div class="row">
        @foreach ( $posts->skip(1) as $post )
        <div class="col-md-4 mb-3">
            <div class="card">
              <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)">{{ $post->category->name }}</div>
                @if ($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                @else
                  <img src="https://source.unsplash.com/500x500/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
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

@else
<p class="text-center fs-4">Post Not Found.</p>
@endif

<div class="d-flex justify-content-center">{{ $posts->links() }}</div>

@endsection