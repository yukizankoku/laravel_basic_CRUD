@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <a href="/dashboard/users/create" class="btn btn-primary mb-3">+ New User</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Portofolio</th>
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
                <td>{{ $user->phone }}</td>
                <td>{{ $user->access->name }}</td>
                <td>
                    <a href="{{ asset('storage/' . $user->portofolio) }}"  target="_blank" class="badge bg-info"><span data-feather="eye"></span></a>
                </td>
                <td>
                    <a href="/dashboard/users/{{ $user->username }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/users/{{ $user->username }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/users/{{ $user->username }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Delete User?')"><span data-feather="trash"></span></button>
                    </form>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
