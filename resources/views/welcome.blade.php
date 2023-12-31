@extends('layout.before-login')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <img src="{{ asset('assets/Photo/suklib.png') }}" class="mx-auto" alt=""
                    style="width: 180px; height: auto; padding-bottom: 20px; padding-top: 60px;">
                <h3 style="text-align: center; color: #012970; padding-bottom : 20px">Selamat Datang di Sukapura
                    Library!</h3>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="text-align: center; font-size: 16px">Login</h5>
                            <a class="nav-link collapsed" href="{{ route('login') }}">
                                <i class="bi bi-person" style="font-size: 6rem; color:#F4683C"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="text-align: center; font-size: 16px">Login Sebagai Admin</h5>
                            <a class="nav-link collapsed" href="{{ route('login') }}">
                                <i class="bi bi-person-workspace" style="font-size: 6rem; color:#012970"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
@endsection
