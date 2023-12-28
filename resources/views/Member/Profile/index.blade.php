{{-- @extends('layouts.member') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')

    <div class="container">
        <h1>User Profile</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>{{ $profiles->name }}</h2>
                @if ($profiles->user_image)
                    <img src="{{ asset('storage/' . $profiles->user_image) }}" alt="{{ $profiles->name }}'s Profile Image">
                @else
                    <img class="profile-image" src="{{ asset('storage/default_profile.jpg') }}"
                        alt="{{ $profiles->name }}'s Profile Image">
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
                <input type="text" id="name" name="name" value="{{ old('name', $profiles->name) }}"
                    class="form-control">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $profiles->email) }}"
                    class="form-control">
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
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir', $profiles->tanggal_lahir) }}" class="form-control">
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
                <input type="text" id="no_telp" name="no_telp" value="{{ old('no_telp', $profiles->no_telp) }}"
                    class="form-control">
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
    </div> --}}



@extends('layout.after-login')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user-dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card" style="background: linear-gradient(to bottom right, #FA7C54, #1B66F8);">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2 style="padding-top: 2px; color: whitesmoke;  font-weight: bold;">{{ $profiles->name }}
                            </h2>

                        </div>
                    </div>

                </div>

                {{-- <div class="col-xl-3">
                    <div class="card" style="background: linear-gradient(to bottom right, #FA7C54, #1B66F8);">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <i class="bi bi-book" style="font-size: 62px; color: whitesmoke"></i>
                            <h3 style="color: whitesmoke;  font-weight: bold;">Buku Terpinjam</h3>
                            <h4 style="color: whitesmoke;  font-weight: bold;">10</h4>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-xl-3">
                    <div class="card" style="background: linear-gradient(to bottom right, #FA7C54, #1B66F8);">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <i class="bi bi-cash" style="font-size: 62px; color: whitesmoke;"></i>
                            <h3 style="color: whitesmoke;  font-weight: bold;">Poin</h3>
                            <h4 style="color: whitesmoke;  font-weight: bold;">95</h4>
                        </div>
                    </div>
                </div> --}}
            </div>


            <!-- Row 2 Start -->

            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Details</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>



                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">



                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Register Number</div>
                                        <div class="col-lg-9 col-md-8">01234567</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{ $profiles->address }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{ $profiles->no_telp }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $profiles->email }}</div>
                                    </div>

                                    {{-- <h5 class="card-title">Bio</h5>
                                    <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores
                                        cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure
                                        rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at
                                        unde.</p> --}}
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="POST" action="{{ route('profile.update', $profiles->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="file" id="user_image" name="user_image"
                                                    class="form-control-file">
                                                @error('user_image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Full
                                                Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" id="name" name="name"
                                                    value="{{ old('name', $profiles->name) }}" class="form-control">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="gender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select id="gender" name="gender" class="form-control">
                                                    <option value="L"
                                                        {{ old('gender', $profiles->gender) === 'L' ? 'selected' : '' }}>
                                                        Male</option>
                                                    <option value="P"
                                                        {{ old('gender', $profiles->gender) === 'P' ? 'selected' : '' }}>
                                                        Female</option>
                                                </select>
                                                @error('gender')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="tanggal_lahir" class="col-md-4 col-lg-3 col-form-label">Date Of
                                                Birth</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                                    value="{{ old('tanggal_lahir', $profiles->tanggal_lahir) }}"
                                                    class="form-control">
                                                @error('tanggal_lahir')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea id="address" name="address" class="form-control">{{ old('address', $profiles->address) }}</textarea>
                                                @error('address')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no_telp" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" id="no_telp" name="no_telp"
                                                    value="{{ old('no_telp', $profiles->no_telp) }}"
                                                    class="form-control">
                                                @error('no_telp')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="email" id="email" name="email"
                                                    value="{{ old('email', $profiles->email) }}" class="form-control">
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="row mb-3">
                                            <label for="about" class="col-md-4 col-lg-3 col-form-label">Bio</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                            </div>
                                        </div> --}}

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
