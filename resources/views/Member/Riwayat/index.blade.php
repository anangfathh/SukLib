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
                                        <th>User ID</th>
                                        <th>Book ID</th>
                                        <th>Date Borrowed</th>
                                        <th>Due Date</th>
                                        <th>Fine (Denda)</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookLoans as $loan)
                                        <tr>
                                            <th scope="row">
                                                <a><img src="assets/Photo/book1.png" alt=""></a>
                                            </th>
                                            <td>{{ $loan->user_id }}</td>
                                            <td>{{ $loan->book_id }}</td>
                                            <td>{{ $loan->date_borrowed }}</td>
                                            <td>{{ $loan->due_date }}</td>
                                            <td>{{ $loan->denda }}</td>
                                            <td>
                                                @if ($loan->date_returned === null && now() < $loan->due_date)
                                                    Currently Borrowed
                                                @elseif ($loan->date_returned !== null)
                                                    Returned
                                                @elseif (now() > $loan->due_date && $loan->date_returned === null)
                                                    Overdue
                                                @endif
                                            </td>
                                            <td>
                                                @if ($loan->date_returned === null && now() < $loan->due_date)
                                                    {{-- <a href="" class="btn btn-success">Pengembalian</a> --}}
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $loan->id }}">
                                                        Pengembalian
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $loan->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <form
                                                                    action="{{ route('bookLoans.return', ['bookLoan_id' => $loan->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                            Isi data
                                                                            pengembalian Buku</h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="date_borrowed">Peminjaman
                                                                                Dari:</label>
                                                                            <input type="date" class="form-control"
                                                                                id="date_borrowed" name="date_borrowed"
                                                                                value="{{ $loan->date_borrowed }}" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="date_returned">Tanggal
                                                                                Pengembalian:</label>
                                                                            <input type="date" class="form-control"
                                                                                id="date_returned" name="date_returned"
                                                                                max="{{ $loan->due_date }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="book_id">Nomor Buku</label>
                                                                            <input type="text" class="form-control"
                                                                                id="book_id" name="book_id"
                                                                                value="{{ $loan->book_id }}" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="denda">Denda</label>
                                                                            <input type="text" class="form-control"
                                                                                id="denda" name="denda"
                                                                                value="Rp. {{ number_format($loan->denda, 2, ',', '.') }}"
                                                                                disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif ($loan->date_returned !== null)
                                                    <a href="" class="btn btn-secondary"
                                                        @disabled(true)>Pengembalian</a>
                                                @elseif (now() > $loan->due_date && $loan->date_returned === null)
                                                    <a href="{{ route('fines.list') }}" class="btn btn-danger">Bayar
                                                        Denda</a>
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
