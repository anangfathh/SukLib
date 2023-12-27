@extends('layout.after-login')
@section('content')
    <!-- MAIN HOME -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Home</h1>
            <nav>
                <ol class="breadcrumb">
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">

            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-5">

                    <!--Quote Card -->
                    <div class="col-xxl-12 col-md-6">
                        <div class="card info-card sales-card">

                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                                style="overflow: hidden;">
                                <div class="carousel-indicators" style="overflow: hidden;">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/quote-1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/quote-2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/quote-3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="display: none";>
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="display: none";>
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>

                                </button>

                            </div><!-- End Quote -->


                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- New Arriv Card -->
                <div class="col-xxl-7 col-xl-20">

                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <img src="assets/img/new arriv.png" alt="Customer Image"
                                style="width: 0.8cm ; margin-top: 10px; border-radius: 10px;">
                            <img src="assets/Photo/new3.png" alt="Customer Image"
                                style="width: 2.6cm ; margin-top: 14px; margin-left: 30px; border-radius: 10px;">
                            <img src="assets/Photo/new2.png" alt="Customer Image"
                                style="width: 2.5cm ; margin-top: 14px; margin-left: 35px; border-radius: 10px;">
                            <img src="assets/Photo/book3.png" alt="Customer Image"
                                style="width: 2.5cm ; margin-top: 14px; margin-left: 35px; border-radius: 10px;">

                            <a href=details-book.php>
                                <img src="assets/Photo/new4.png" alt="Customer Image"
                                    style="width: 2.5cm ; margin-top: 14px; margin-left: 35px; border-radius: 10px;">
                            </a>

                        </div>

                    </div>

                </div><!-- End New Arriv Card -->

            </div>

            <!-- List Book Card -->
            <div class="row">
                <h4 class="card-title" style="font-size: 26px; margin-left: 16px;">Selamat Pagi</h4>
                <h4 class="card-title" style="font-size: 20px; margin-left: 16px;">Rekomendasi Untuk Anda</h4>
                <div class="col-lg-2">
                    <!-- Card pertama -->
                    <div class="card">
                        <img src="assets/Photo/book1.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Don't Make Me think</h5>
                            <p style="font-size: 12px;">Steve Krug, 2000 <br> 4.5/5
                            </p>
                        </div>
                    </div><!-- End Card pertama -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/book2.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">The Design of Every</h5>
                            <p style="font-size: 12px;">Don Norman, 1988 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/book3.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Sprint : How To Solve</h5>
                            <p style="font-size: 12px;">Jake Knapp, 2000 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/book4.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">LEAN UX</h5>
                            <p style="font-size: 12px;">Jeff G. and Josh S., 2016 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/book5.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">The Road to React</h5>
                            <p style="font-size: 12px;">Robin Wieruch., 2000 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/new1.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Filosofi Teras</h5>
                            <p style="font-size: 12px;">Henry M., 2018 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

            </div>


            <!-- Baris kedua -->

            <div class="row">
                <h4 class="card-title" style="font-size: 20px; margin-left: 16px;">Bacaan Terkini</h4>
                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/new2.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Pulang Pergi</h5>
                            <p style="font-size: 12px;">Tere Liye, 2021 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/new3.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Sepotong Hati Yang..</h5>
                            <p style="font-size: 12px;">Tere Liye, 2021 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/new4.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Mariposa</h5>
                            <p style="font-size: 12px;">Luluk HF., 2018 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/new5.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Dikta dan Hukum</h5>
                            <p style="font-size: 12px;">Dhia'an F., 2018 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/new6.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Dilan 1990</h5>
                            <p style="font-size: 12px;">Pidi Baiq, 2014 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-2">
                    <!-- Card kedua -->
                    <div class="card">
                        <img src="assets/Photo/new7.png" class="card-img-top" alt="..." style="height: 206px;">
                        <div class="card-body">
                            <h5 class="card-title">Si Anak Pintar</h5>
                            <p style="font-size: 12px;">Tere Liye, 2018 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

            </div>


            </div>
            </div><!-- End sidebar recent posts-->

            </div>
            </div><!-- End News & Updates -->

            </div>

            <!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
