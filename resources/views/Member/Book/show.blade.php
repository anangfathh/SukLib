@extends('layout.after-login')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Detail Buku</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home-member.php">Home</a></li>
                    <li class="breadcrumb-item active">Details</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- MAIN -->

        <section class="section">
            <div class="row">

                <div class="col-lg-2" style="padding-right: 20px;">
                    <!-- Card kedua -->
                    <div class="card">
                        @if ($book->book_image)
                            <img src="{{ asset('storage/' . $book->book_image) }}" alt="Book Image" width="100">
                        @else
                            No Image
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->name }}</h5>
                            <p style="font-size: 12px;">{{ $book->Rating }}</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-4">
                    <h1>{{ $book->name }}</h1>
                    <p>By Luluk HF, 2018 <br> Season Satu </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <p style="font-size: 12px; font-weight: bold;">2 Sedang Dibaca</p>
                            <h6>Jenis Buku</h6>
                            <p style="font-size: 12px;">
                                <i class="bi bi-check-circle"></i>
                                {{ $book->type }}
                            </p>
                        </div>

                        <div class="col-lg-6">
                            <p style="font-size: 12px; font-weight: bold;">20 Sudah Dibaca</p>
                            <h6>Status</h6>
                            <button class="btn btn-success btn-sm" style="font-size: 12px;">{{ $book->status }}</button>
                        </div>
                    </div>
                    <div class="row m-3 ">
                        <div class="container-m align-self-start"><a href="{{ route('bookLoans.form', $book->id) }}"
                                class="btn btn-success">Pinjam</a></div>
                        <div class="container-m align-self-start"> <a href="{{ route('member.books.index') }}"
                                class="btn btn-primary mt-3">Back to List</a></div>

                        {{-- background-color: #FA7C54; --}}
                    </div>


                </div>


                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Details</h1>
                            <p style="font-size: 14px;">{{ $book->desc }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-size: 14px; padding-top: 20px;">Tanggal Masuk<br>
                                <b>{{ $book->created_at->format('Y-m-d') }}</b>
                            </p>
                        </div>
                    </div>
                </div><!-- End Default Card -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-size: 14px; padding-top: 20px;">Penyumbang <br> <b>{{ $book->user->name }}</b>
                            </p>
                        </div>
                    </div>
                </div><!-- End Default Card -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-size: 14px; padding-top: 20px;">Genre <br> <b>{{ $book_category }}</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-size: 14px; padding-top: 20px;">ID Buku <br> <b>{{ $book->book_id }}</b></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            {{-- <div class="row">
                <h5><b>Sinopsis</b></h5>
                <p style="text-align: justify;">Novel Mariposa mengisahkan seorang gadis cantik bernama Natasha Kay Loovi
                    atau kerap disapa Acha yang
                    memperjuangkan cintanya terhadap seorang laki-laki berhati beku dan super dingin–bagaikan es–dengan
                    kehidupannya yang serba monoton, bernama Iqbal. Mereka berdua adalah siswa yang sangat pintar di
                    sekolah.</p>
            </div> --}}
        </section>

    </main><!-- End #main -->
@endsection
