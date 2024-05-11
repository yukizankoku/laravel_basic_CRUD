@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Profile</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Portofolio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                    <a href="{{ asset('storage/' . $user->portofolio) }}"  target="_blank" class="badge bg-info"><span data-feather="eye"></span></a>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/dashboard/user/{{ $user->username }}" class="btn btn-success mb-3">View Details</a>
    <a href="/dashboard/user/{{ $user->username }}/edit" class="btn btn-warning mb-3">Edit Profile</a>
    <a href="/change-password" class="btn btn-primary mb-3">Change Password</a>
</div>
@endsection
