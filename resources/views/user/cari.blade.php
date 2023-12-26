@extends('layout.after-login')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cari</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Cari</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Pencarian Buku <span>| </span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cover</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Nilai</th>
                                                <th scope="col">Ketersediaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#"> <img src="assets/Photo/book1.png"
                                                            style="height: 100px;" width="70px" alt=""></a></th>
                                                <td>Don’t Make Me Think </td>
                                                <td><a href="#" class="text-primary">Komputer Sains</a></td>
                                                <td>4.5/5</td>
                                                <td><span class="badge bg-success">Tersedia</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"> <img src="assets/Photo/book2.png"
                                                            style="height: 100px;" width="70px" alt=""></a></th>
                                                <td>The Design of EveryDay Things</td>
                                                <td><a href="#" class="text-primary">Komputer Sains</a></td>
                                                <td>4.5/5</td>
                                                <td><span class="badge bg-warning">Dipinjam</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="details-book.php"><img
                                                            src="assets/Photo/new4.png" style="height: 100px;"
                                                            width="70px" alt=""></a></th>
                                                <td>Mariposa</td>
                                                <td><a href="#" class="text-primary">Fiksi</a></td>
                                                <td>4.5/5</td>
                                                <td><span class="badge bg-success">Tersedia</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/Photo/book5.png"
                                                            style="height: 100px;" width="70px" alt=""></a></th>
                                                <td>The Road to React</td>
                                                <td><a href="#" class="text-primar">Sains</a></td>
                                                <td>4.5/5</td>
                                                <td><span class="badge bg-danger">Kosong</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/Photo/new2.png"
                                                            style="height: 100px;" width="70px" alt=""></a></th>
                                                <td>Pulang Pergi</td>
                                                <td><a href="#" class="text-primary">Sains Fiksi</a></td>
                                                <td>4.5/5</td>
                                                <td><span class="badge bg-success">Tersedia</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- End Left side columns -->


                <div class="col-lg-4">



                </div>
            </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
