@extends('layout.after-login')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cari</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
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
                                                <th>Book Images</th>
                                                <th>Judul Buku</th>
                                                <th>Book ID</th>

                                                <th>Rating</th>
                                                <th>Status</th>
                                                <th>Type</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($books as $book)
                                                <tr>
                                                    <td scope="row"><a href="#">
                                                            @if ($book->book_image)
                                                                <img src="{{ asset('storage/' . $book->book_image) }}"
                                                                    alt="Book Image" width="70" height="100"
                                                                    class="align-self-center">
                                                            @else
                                                                No Image
                                                            @endif
                                                        </a></td>
                                                    <td>{{ $book->name }}</td>
                                                    <td>{{ $book->book_id }}</td>

                                                    <td>{{ $book->Rating }}</td>
                                                    <td>{{ $book->status }}</td>
                                                    <td>{{ $book->type }}</td>
                                                    <td>
                                                        <a href="{{ route('member.books.show', $book->id) }}"
                                                            class="btn btn-primary">Details</a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
