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

                        <img src="assets/Photo/new4.png" class="card-img-top" alt="..." style="height: 206px; ">
                        <div class="card-body">
                            <h5 class="card-title">Mariposa</h5>
                            <p style="font-size: 12px;">Luluk HF., 2018 <br> 4.5/5</p>
                        </div>
                    </div><!-- End Card kedua -->
                </div>

                <div class="col-lg-4">
                    <h1>Mariposa</h1>
                    <p>By Luluk HF, 2018 <br> Season Satu </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <p style="font-size: 12px; font-weight: bold;">2 Sedang Dibaca</p>
                            <h6>Jenis Buku</h6>
                            <p style="font-size: 12px;">
                                <i class="bi bi-check-circle"></i>
                                Hard Copy
                            </p>
                        </div>

                        <div class="col-lg-6">
                            <p style="font-size: 12px; font-weight: bold;">20 Sudah Dibaca</p>
                            <h6>Status</h6>
                            <button class="btn btn-success btn-sm" style="font-size: 12px;">Tersedia</button>
                            <p style="font-size: 13px;  padding-top: 10px;">
                                <i class="bi bi-geo-alt"></i>
                                Rak 2-3
                            </p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px; ">
                        <a href="form-peminjaman.php" class="btn btn-success btn-sm"
                            style="width: 200px; background-color: #FA7C54; border: none;">Pinjam</a>
                    </div>


                </div>


                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Details</h1>
                            <p style="font-size: 14px;">Hidayatul Fajriyah atau lebih dikenal dengan nama Luluk HF adalah
                                seorang penulis
                                berasal dari Lamongan Jawa Timur. Ia merupakan salah satu penulis yang aktif mengunggah
                                karya tulisnya di wattpad. Beberapa novel karyanya pernah diadaptasi menjadi film seperti
                                EL,
                                Mariposa dan 12 Cerita Glen Anggara</p>
                            <p style="font-size: 12px;">
                                Nama pena: Luluk HF</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-size: 14px; padding-top: 20px;">Tahun Terbit <br> <b>2018</b></p>
                        </div>
                    </div>
                </div><!-- End Default Card -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-size: 14px; padding-top: 20px;">Penerbit <br> <b>Gramedia</b></p>
                        </div>
                    </div>
                </div><!-- End Default Card -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-size: 14px; padding-top: 20px;">Genre <br> <b>Fiksi</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p style="font-size: 14px; padding-top: 20px;">Jumlah Halaman <br> <b>216</b></p>
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
