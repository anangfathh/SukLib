@extends('layout.before-login')
@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



                            <div class="card mb-3">

                                <div class="card-body">
                                    <div class="pt-4 pb-2 text-center">
                                        <a href="index.php">
                                            <img src="assets/Photo/suklib.png" alt=""
                                                style="width: 100px; height: auto; padding-bottom: 10px;">
                                        </a>
                                    </div>
                                    <div class="pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Selamat Datang</h5>
                                        <p class="text-center small">Masuk Untuk Peminjaman di Sukpur Library</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate>

                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Nama Pengguna</label>
                                            <input type="text" name="name" class="form-control" id="yourName"
                                                required>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit"
                                                style="background-color: #FA7C54; border: none; ">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Belum Punya Akun? <a
                                                    href="{{ route('register') }}">Daftar</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
@endsection
