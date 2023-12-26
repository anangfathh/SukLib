@extends('layout.after-login')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Riwayat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Riwayat</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Currently Borrowed</a></li>
                                <li><a class="dropdown-item" href="#">Returned</a></li>
                                <li><a class="dropdown-item" href="#">Over Due</a></li>
                            </ul>
                        </div>
                        <div class="card-body pb-0">
                            <h5 class="card-title">Riwayat <span>| All</span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Judul</th>
                                        <th scope="col"></th>
                                        <th scope="col">Format Buku</th>
                                        <th scope="col">Dipinjam Pada</th>
                                        <th scope="col">Dipinjam Sampai</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <a><img src="assets/Photo/book1.png" alt=""></a>
                                        </th>
                                        <td>
                                            <a class="text-dark fw-bold">DON'T MAKE ME THINK</a><br>
                                            <a class="text-dark">Steve Krug, 2000</a><br>
                                            <a class="text-dark fw-light">Second Edition</a>
                                        </td>
                                        <td>Hard Copy</td>
                                        <td>02 Dec 2023</td>
                                        <td>08 Dec 2023</td>
                                        <td>Returned</td>
                                        <td>
                                            <a class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#myModal">Pengembalian</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <a><img src="assets/Photo/book6.png" alt=""></a>
                                        </th>
                                        <td>
                                            <a class="text-dark fw-bold">RICH DAD POOR DAD</a><br>
                                            <a class="text-dark">Robert T.Kiyosaki, 1997</a><br>
                                            <a class="text-dark fw-light"></a>
                                        </td>
                                        <td>Hard Copy</td>
                                        <td>10 Dec 2023</td>
                                        <td>14 Dec 2023</td>
                                        <td class="text-success">Currently Borrowed</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" data-bs-toggle="modal"
                                                data-bs-target="#myModal">Pengembalian</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <a><img src="assets/Photo/new1.png" alt=""></a>
                                        </th>
                                        <td>
                                            <a class="text-dark fw-bold">FILOSOFI TERAS</a><br>
                                            <a class="text-dark">Henry. M, 2018</a><br>
                                            <a class="text-dark fw-light"></a>
                                        </td>
                                        <td>Hard Copy</td>
                                        <td>08 Dec 2023</td>
                                        <td>11 Dec 2023</td>
                                        <td class="text-danger">Over Due</td>
                                        <td>
                                            <a class="btn btn-sm btn-danger" href="bayar.html">Bayar Denda</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>
        </section>
        <!-- Modal -->
        <div class="modal" tabindex="-1" id="myModal">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title fw-bold">Isi data Pengembalian Buku</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group">
                            <div class="list-group-item fw-bold border-0 mb-1">
                                <!-- Vertical Form -->
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="inputDate" class="col-sm-2 col-form-label">Dari</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control border-0 bg-secondary-light">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputDate" class="col-sm-2 col-form-label">Sampai</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control border-0 bg-secondary-light">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Nomor Buku</label>
                                        <input type="text" class="form-control" id="inputNanme4" placeholder="65XC2023">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputNanme3" class="form-label">Denda</label>
                                        <input type="text" class="form-control" id="inputNanme3"
                                            placeholder="RP 0,00">
                                    </div>
                                </form>
                                <!-- Vertical Form -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                            <a class="text-white" target="_blank">Return</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
@endsection
