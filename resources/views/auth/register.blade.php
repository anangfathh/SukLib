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

                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Nama Pengguna</label>
                                            <input type="text" name="name" class="form-control" id="yourName"
                                                required>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                required>
                                            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Konfirmasi Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                required>
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
