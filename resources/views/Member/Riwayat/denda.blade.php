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
                                    <h5 class="card-title">Bayar Denda </h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th>Book Name</th>
                                                <th>Jumlah Hari Telat:</th>
                                                <th>Fine (Denda)</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($fines as $fine)
                                                <tr>
                                                    <td>{{ $fine->book->name }}</td>
                                                    <td>
                                                        @if (\Carbon\Carbon::now()->greaterThan($fine->due_date))
                                                            {{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->diffInDays($fine->due_date) }}
                                                            hari
                                                        @endif
                                                    </td>
                                                    <td>{{ $fine->denda }}</td>
                                                    <td>
                                                        {{ $fine->status_denda }}
                                                    </td>

                                                    <td>
                                                        @if ($fine->status_denda === 'Unpaid')
                                                            {{-- <a href="" class="btn btn-success">Bayar Sekarang</a> --}}
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-success"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal{{ $fine->id }}">
                                                                Bayar Sekarang
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal{{ $fine->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <form
                                                                            action="{{ route('fine.pay', ['bookLoan_id' => $fine->id]) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5"
                                                                                    id="exampleModalLabel">Isi data
                                                                                    Pembayaran
                                                                                    Denda</h1>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="book_id">Judul
                                                                                        Buku</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id="book_id"
                                                                                        name="book_id"
                                                                                        value="{{ $fine->book->name }}"
                                                                                        disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="denda">Denda</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id="denda"
                                                                                        name="denda"
                                                                                        value="Rp. {{ number_format($fine->denda, 2, ',', '.') }}"
                                                                                        disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="metode_pembayaran">Choose
                                                                                    Payment Method:</label>
                                                                                <select id="metode_pembayaran"
                                                                                    name="metode_pembayaran">
                                                                                    <option value="Mandiri">Mandiri
                                                                                    </option>
                                                                                    <option value="BNI">BNI</option>
                                                                                    <option value="BRI">BRI</option>
                                                                                    <option value="DANA">DANA</option>
                                                                                    <option value="Tunai">Tunai</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Bayar</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif ($fine->status_denda === 'Paid')
                                                            <a href="" class="btn btn-secondary"
                                                                @disabled(true)>Bayar sekarang</a>
                                                        @endif
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
