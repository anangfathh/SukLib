@extends('admin-layout.master')
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
                                        <th>Judul Buku</th>
                                        <th>category</th>
                                        <th>Type</th>
                                        <th>Date Borrowed</th>
                                        <th>Due Date</th>
                                        <th>ID member</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookLoans as $loan)
                                        <tr>
                                            <th scope="row">
                                                <a><img src="assets/Photo/book1.png" alt=""></a>
                                            </th>
                                            <td>{{ $loan->book->name }}</td>
                                            <td>{{ $loan->book->category->name }}</td>
                                            <td>{{ $loan->book->type }}</td>
                                            <td>{{ $loan->date_borrowed }}</td>
                                            <td>{{ $loan->due_date }}</td>
                                            <td>{{ $loan->user_id }}</td>
                                            <td>
                                                @if ($loan->date_returned === null && now() < $loan->due_date)
                                                    <span class="badge bg-primary"><i
                                                            class="bi bi-collection me-1"></i>Currently Borrowed</span>
                                                @elseif ($loan->date_returned !== null)
                                                    <span class="badge bg-success"><i
                                                            class="bi bi-check-circle me-1"></i>Returned</span>
                                                @elseif (now() > $loan->due_date && $loan->date_returned === null)
                                                    <span class="badge bg-danger"><i
                                                            class="bi bi-exclamation-octagon me-1"></i> Overdue</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>
        </section>

    </main><!-- End #main -->
@endsection
