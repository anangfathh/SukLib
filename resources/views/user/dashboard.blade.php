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
                                        <img src="{{ asset('assets/img/quote-1.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/quote-2.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/quote-3.png') }}" class="d-block w-100"
                                            alt="...">
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
                            <img src="{{ asset('assets/img/new arriv.png') }}" alt="Customer Image"
                                style="width: 0.8cm ; margin-top: 10px; border-radius: 10px;">
                            @foreach ($recent as $new)
                                <a href="{{ route('member.books.show', $new->id) }}">
                                    <img src="{{ asset('storage/' . $new->book_image) }}" alt="Customer Image"
                                        style="width: 2.6cm ; margin-top: 14px; margin-left: 30px; border-radius: 10px;">
                                </a>
                            @endforeach

                        </div>

                    </div>

                </div><!-- End New Arriv Card -->

            </div>

            <!-- List Book Card -->
            <div class="row">
                <h4 class="card-title" style="font-size: 26px; margin-left: 16px;">Selamat Pagi</h4>
                <h4 class="card-title" style="font-size: 20px; margin-left: 16px;">Rekomendasi Untuk Anda</h4>
                @foreach ($random as $random)
                    <div class="col-lg-2">
                        <!-- Card pertama -->
                        <a href="{{ route('member.books.show', $random->id) }}">
                            <div class="card">
                                @if ($random->book_image)
                                    <img src="{{ asset('storage/' . $random->book_image) }}" alt="Book Image" width="250"
                                        height="350" class="align-self-center">
                                @else
                                    No Image
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $random->name }}</h5>
                                    <p style="font-size: 12px;">Steve Krug, 2000 <br> 4.5/5
                                    </p>
                                </div>
                            </div><!-- End Card pertama -->
                        </a>
                    </div>
                @endforeach





            </div>


            <!-- Baris kedua -->

            <div class="row">
                <h4 class="card-title" style="font-size: 20px; margin-left: 16px;">Bacaan Terkini</h4>
                @foreach ($rekomendasi as $rekom)
                    <div class="col-lg-2">
                        <!-- Card pertama -->
                        <a href="{{ route('member.books.show', $rekom->id) }}">
                            <div class="card">
                                @if ($rekom->book_image)
                                    <img src="{{ asset('storage/' . $rekom->book_image) }}" alt="Book Image" width="250"
                                        height="350" class="align-self-center">
                                @else
                                    No Image
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $rekom->name }}</h5>
                                    <p style="font-size: 12px;">Steve Krug, 2000 <br> 4.5/5
                                    </p>
                                </div>
                            </div><!-- End Card pertama -->
                        </a>
                    </div>
                @endforeach



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
