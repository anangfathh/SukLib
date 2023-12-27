@extends('layout.before-login')
@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-8 d-flex flex-column align-items-center justify-content-center">



                            <div class="card mb-6">

                                <div class="card-body">

                                    <div class="pt-4 pb-2 text-center">
                                        <a href="index.php">
                                            <img src="assets/Photo/suklib.png" alt=""
                                                style="width: 100px; height: auto; padding-bottom: 10px;">
                                        </a>
                                        <!-- <h5 class="card-title pb-0 fs-4">Create an Account</h5> -->
                                        <p class="text-center small">Daftar Untuk Peminjaman di Sukpur Libary</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate method="POST"
                                        action="{{ route('register') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="name"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="password-confirm"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit"
                                                style="background-color: #FA7C54; border: none; ">Daftar</button>
                                        </div>
                                        <div class="col-6 text-center">
                                            <p class="small mb-0">Sudah punya akun? <a href="{{ route('login') }}">Log
                                                    in</a></p>
                                        </div>
                                        <!-- <div class="col-md-6 text-center" >
                                                  <p class="small mb-0"><a href="pages-login.php">Masuk sebagai tamu</a></p>
                                                </div> -->
                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </section>

        </div>
    @endsection
