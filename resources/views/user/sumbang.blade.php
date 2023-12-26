@extends('layout.after-login')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Sumbangan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Sumbangan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <!-- Left side columns -->
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <!-- Sales Card -->
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Isi Detail Buku</h5>
                            <div class="d-flex align-items-center">
                                <div class="detailbuku">
                                    <form action="sumbang(submitfix).php" method="post">
                                        <div class="row mb-3 formbuku">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Nama Buku"
                                                    name="buku">
                                                <input type="text" class="form-control" placeholder="Nama Pengarang"
                                                    name="pengarang">
                                                <textarea class="form-control" style="height: 100px" placeholder="Tambah Detail Buku (Opsional)" name="detailbuku"></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="dropdown sumbangan">
                                                    <a class="btn btn-secondary dropdown-toggle kategori" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Kategori
                                                    </a>
                                                </div>
                                                <div class="dropdown sumbangan">
                                                    <a class="btn btn-secondary dropdown-toggle lang" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Lang
                                                    </a>
                                                </div>
                                                <div class="checkbox sumbangan">
                                                    <span class="span checkbox"><b>Format Yang Tersedia</b></span>
                                                    <div class="form-check form-check-reverse">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Hard Copy
                                                        </label>
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row sumbangan">
                                                <div class="sumbit-container">
                                                    <span class="submit-text">Tampilkan Bukti Telah Menyumbang</span>
                                                    <div class="submit-rectangle">
                                                        <div class="rectangle-text">
                                                            <img src="assets\Photo\upload_icon.png"
                                                                class="img-rectangle mx-auto d-block">
                                                            <p class="text-center rectangle top">Drag & drop files or
                                                                <a href="#" class="color-orange">Browse</a>
                                                            </p>
                                                            <p class="text-center rectangle bottom">Supported formats:
                                                                JPG, PNG, HEIC</p>
                                                        </div>
                                                    </div>
                                                    <div class="submit-button-rectangle">
                                                        <input class="btn btn-primary submit-button-rectangle"
                                                            type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Sales Card -->
                <!-- Revenue Card -->
            </div>
            <div class="col-lg-6">
                <p class="thx">TERIMA KASIH TELAH
                <p class="thx menyumbang">MENYUMBANG!</p>
                </p>
                <div class="row thx2">
                    <div class="thx-container">
                        <span class="thx-text">Sumbangan mu sebelumnya</span>
                        <div class="row align-items-start thx2-container">
                            <div class="col thx">
                                <div class="card thx">
                                    <div class="thx-card-body">
                                        <img src="assets\Photo\book1.png" width="123" height="170">
                                        <p class="card-title-thx1">Don’t Make Me think</p>
                                        <p class="card-title-thx2">Steve Krug, 2000</p>
                                        <p class="card-title-thx3">14k Readers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col thx">
                                <div class="card thx">
                                    <div class="thx-card-body">
                                        <img src="assets\Photo\book2.png" width="123" height="170">
                                        <p class="card-title-thx1">The Design of Every..</p>
                                        <p class="card-title-thx2">Don Norman, 1988</p>
                                        <p class="card-title-thx3">14k Readers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col thx">
                                <div class="card thx">
                                    <div class="thx-card-body">
                                        <img src="assets\Photo\book3.png" width="123" height="170">
                                        <p class="card-title-thx1">Sprint : How to solve...</p>
                                        <p class="card-title-thx2">Jake Knapp, 2000</p>
                                        <p class="card-title-thx3">14k Readers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reveneu card end -->
            </div>
        </section>
    </main><!-- End #main -->
@endsection
