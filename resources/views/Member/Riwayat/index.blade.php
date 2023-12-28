{{-- resources/views/member/riwayat/index.blade.php --}}
@extends('layouts.master') {{-- Adjust based on your layout file --}}

@section('content')

<div class="container">
    <h1>Book Loan History</h1>

    {{-- Table for displaying book loans --}}
    <table class="table table-bordered">
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
            {{-- Loop through the book loans and display each one --}}
            @foreach ($bookLoans as $loan)
                <tr>
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
                            <a href="" class="btn btn-success">Pengembalian</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $loan->id }}">
                                Pengembalian
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $loan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <form action="{{ route('bookLoans.return', ['bookLoan_id' => $loan->id]) }}" method="POST">
                                    @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Isi data pengembalian Buku</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="date_borrowed">Peminjaman Dari:</label>
                                        <input type="date" class="form-control" id="date_borrowed" name="date_borrowed" value="{{ $loan->date_borrowed }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_returned">Tanggal Pengembalian:</label>
                                        <input type="date" class="form-control" id="date_returned" name="date_returned" max="{{ $loan->due_date }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="book_id">Nomor Buku</label>
                                        <input type="text" class="form-control" id="book_id" name="book_id" value="{{ $loan->book_id }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="denda">Denda</label>
                                        <input type="text" class="form-control" id="denda" name="denda" value="Rp. {{ number_format($loan->denda, 2, ',', '.') }}" disabled>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        @elseif ($loan->date_returned !== null)
                            <a href="" class="btn btn-secondary" @disabled(true)>Pengembalian</a>
                        @elseif (now() > $loan->due_date && $loan->date_returned === null)
                            <a href="{{ route('fines.list') }}" class="btn btn-danger">Bayar Denda</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
