@extends('admin-layout.master')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Member</h1>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Member Data</h5>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- Floating Labels Form -->
                            <form method="POST" class="row g-3" action="{{ route('users.update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ $user->name }}" readonly required />
                                        <label for="name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ $user->email }}" readonly required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="no_telp" type="text" class="form-control" name="no_telp"
                                            value="{{ $user->no_telp }}" readonly required>
                                        <label for="no_telp">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea id="address" class="form-control" name="address" readonly required>{{ $user->address }}</textarea>
                                        <label for="address">Address</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select id="status" class="form-select" name="status">
                                            <option value="Aktif" {{ $user->status === 'Aktif' ? 'selected' : '' }}>Aktif
                                            </option>
                                            <option value="Tidak Aktif"
                                                {{ $user->status === 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif
                                            </option>
                                        </select>
                                        <label for="floatingName">Status</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select id="is_admin" class="form-select" name="is_admin">
                                            <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>Tidak
                                            </option>
                                            <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Ya
                                            </option>
                                        </select>
                                        <label for="floatingName">Jadikan Admin</label>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update User</button>
                                </div>
                            </form>
                            <!-- End floating Labels Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
