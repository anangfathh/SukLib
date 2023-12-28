@extends('layouts.member') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')

<div class="container">
    <h1>User Profile</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>{{ $profiles->name }}</h2>
            @if ($profiles->user_image)
                <img src="{{ asset('storage/' . $profiles->user_image) }}" alt="{{ $profiles->name }}'s Profile Image">
            @else
                <img class="profile-image" src="{{ asset('storage/default_profile.jpg') }}" alt="{{ $profiles->name }}'s Profile Image">
            @endif
            <p>Email: {{ $profiles->email }}</p>
            <p>Gender: {{ $profiles->gender == 'L' ? 'Male' : 'Female' }}</p>
            <p>Date of Birth: {{ $profiles->tanggal_lahir }}</p>
            <p>Address: {{ $profiles->address }}</p>
            <p>Phone Number: {{ $profiles->no_telp }}</p>
            <p>Status: {{ $profiles->status }}</p>
            <p>Role: {{ $profiles->is_admin ? 'Admin' : 'Regular User' }}</p>
        </div>
    </div>
</div>

<!-- resources/views/member/profile/edit.blade.php -->
<div class="container">
    <h1>Edit Profile</h1>
    <form method="POST" action="{{ route('profile.update', $profiles->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $profiles->name) }}" class="form-control">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $profiles->email) }}" class="form-control">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" class="form-control">
                <option value="L" {{ old('gender', $profiles->gender) === 'L' ? 'selected' : '' }}>Male</option>
                <option value="P" {{ old('gender', $profiles->gender) === 'P' ? 'selected' : '' }}>Female</option>
            </select>
            @error('gender')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Date of Birth</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $profiles->tanggal_lahir) }}" class="form-control">
            @error('tanggal_lahir')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" class="form-control">{{ old('address', $profiles->address) }}</textarea>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="no_telp">Phone Number</label>
            <input type="text" id="no_telp" name="no_telp" value="{{ old('no_telp', $profiles->no_telp) }}" class="form-control">
            @error('no_telp')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="user_image">Profile Image</label>
            <input type="file" id="user_image" name="user_image" class="form-control-file">
            @error('user_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Add more form fields for other user data as needed -->

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

@endsection
