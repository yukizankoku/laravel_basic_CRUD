@extends('dashboard.layouts.main')

@section('container')

<div class="container">
<h1 class="mb-5">{{ $user->name }}</h1>

<a href="/dashboard/user" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
<a href="/dashboard/user/{{ $user->username }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit Profile</a>
<a href="/change-password" class="btn btn-primary"><span data-feather="edit"></span>Change Password</a>
<form action="/dashboard/user/{{ $user->username }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Delete Account?')"><span data-feather="trash"></span>Delete Account</button>
</form>

<form class="col-lg-8">
    <div class="mb-3 mt-5">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->name }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->username }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->email }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Phone</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->phone }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Status</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $user->access->name }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Portofolio</label>
      <div>
        <a href="{{ asset('storage/' . $user->portofolio) }}"  target="_blank" class="badge bg-info"><span data-feather="eye"></span></a>
      </div>
    </div>
</form>

@endsection
