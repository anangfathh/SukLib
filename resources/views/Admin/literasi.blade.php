@extends('admin-layout.master')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-6">
                    <div class="row">
                        <!-- Sales Card -->
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl col-md-6">
                            <div class="card info-card revenue-card">


                                <div class="card-body">
                                    <h5 class="card-title">
                                        Data <span>| Total Member</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            {!! $TotalMemberChart->container() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl col-md-6">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Data <span>| Total Peminjam Buku</span>
                                    </h5>

                                    <div class="d-flex align-items-center">

                                        <div class="ps-3">
                                            {!! $TotalLoanChart->container() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Customers Card -->
                        <!-- Buku Peminjaman Terbanyak -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="m-3 text-center">Buku Terbanyak Dipinjam</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Buku <span>| Paling Diminati</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-bookmark"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $firstBookName }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Buku <span>| Paling Diminati</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-bookmark"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $secondBookName }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Buku <span>| Paling Diminati</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-bookmark"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $thirdBookName }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Grafik Pertambahan Member Per Bulan</h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart">{!! $MemberBulananChart->container() !!}</div>


                                    <!-- End Line Chart -->
                                </div>
                            </div>
                        </div>
                        <!-- End Reports -->
                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-6">
                    <div class="row justify-content-end">
                        <!-- Sales Card -->
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-11 col-md-6">
                            <div class="card info-card revenue-card">


                                <div class="card-body">

                                    <div class="d-flex align-items-center px-5 pt-4 justify-content-between">
                                        <div class="col-5">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Tingkat Literasi Dunia</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Finlandia</td>
                                                        <th scope="row">1</th>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">Norwegia</td>
                                                        <th scope="row">2</th>

                                                    </tr>
                                                    <tr>
                                                        <td>Islandia</td>
                                                        <th scope="row">3</th>

                                                    </tr>
                                                    <tr>
                                                        <td>Indonesia</td>
                                                        <th scope="row">60</th>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-5">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Tingkat Literasi Indonesia</th>
                                                        <th scope="col"></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Di Yogyakarta</td>
                                                        <th scope="row">1</th>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">Kalimantan Barat</td>
                                                        <th scope="row">2</th>

                                                    </tr>
                                                    <tr>
                                                        <td>Kalimantan Timur</td>
                                                        <th scope="row">3</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jawa Barat</td>
                                                        <th scope="row">7</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Revenue Card -->
                        <!-- Buku Peminjaman Terbanyak -->
                        <div class="col-12 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="m-3 text-center">Genre Paling Banyak Diminati</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Category <span>| Paling Populer</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-bookmark-star"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $categoryName }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Category <span>| Paling Populer</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-bookmark-star"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $categoryName2 }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Category <span>| Paling Populer</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-bookmark-star"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $categoryName3 }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Grafik Pembaca Setiap Bulan</h5>

                                        <div id="trafficChart" style="min-height: 400px" class="echart">
                                            {!! $PembacaBulananChart->container() !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Reports -->
                    </div>


                    <!-- Website Traffic -->

                    <!-- End Website Traffic -->

                    <!-- News & Updates Traffic -->
                </div>
                <!-- End Right side columns -->
            </div>
        </section>
    </main>


    <script src="{{ $MemberBulananChart->cdn() }}"></script>

    {{ $MemberBulananChart->script() }}

    <script src="{{ $TotalMemberChart->cdn() }}"></script>

    {{ $TotalMemberChart->script() }}


    <script src="{{ $PembacaBulananChart->cdn() }}"></script>

    {{ $PembacaBulananChart->script() }}

    <script src="{{ $MemberCountChart->cdn() }}"></script>

    {{ $MemberCountChart->script() }}

    <script src="{{ $TotalLoanChart->cdn() }}"></script>

    {{ $TotalLoanChart->script() }}
@endsection
