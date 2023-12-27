@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Users</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Nomor Registrasi</th>
                <th>Email</th>
                <th>No. Hp</th>
                <th>Status Akun</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->no_telp }}</td>
                <td>{{ $user->status}}</td>
                <td>
                    {{-- <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">View</a> --}}
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
