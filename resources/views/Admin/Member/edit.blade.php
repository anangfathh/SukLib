@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit User</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" class="form-control" name="status">
                <option value="Aktif" {{ $user->status === 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Tidak Aktif" {{ $user->status === 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>

        <div class="form-group">
            <label for="no_telp">Phone Number</label>
            <input id="no_telp" type="text" class="form-control" name="no_telp" value="{{ $user->no_telp }}">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" class="form-control" name="address">{{ $user->address }}</textarea>
        </div>

        <div class="form-group">
            <label for="is_admin">Jadikan Admin</label>
            <select id="is_admin" class="form-control" name="is_admin">
                <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>Tidak</option>
                <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Ya</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection
