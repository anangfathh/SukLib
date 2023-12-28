{{-- resources/views/member/riwayat/index.blade.php --}}
@extends('layouts.master') {{-- Adjust based on your layout file --}}

@section('content')

<div class="container">
    <h1>Book Loan History</h1>

    {{-- Table for displaying book loans --}}
    <table class="table table-bordered">
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
            {{-- Loop through the book loans and display each one --}}
            @foreach ($fines as $fine)
                <tr>
                    <td>{{ $fine->book->name }}</td>
                    <td>
                        @if (\Carbon\Carbon::now()->greaterThan($fine->due_date))
                            {{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->diffInDays($fine->due_date) }} hari 
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
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $fine->id }}">
                                Bayar Sekarang
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $fine->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <form action="{{ route('fine.pay', ['bookLoan_id' => $fine->id]) }}" method="POST">
                                    @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Isi data Pembayaran Denda</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="book_id">Judul Buku</label>
                                        <input type="text" class="form-control" id="book_id" name="book_id" value="{{ $fine->book->name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="denda">Denda</label>
                                        <input type="text" class="form-control" id="denda" name="denda" value="Rp. {{ number_format($fine->denda, 2, ',', '.') }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="metode_pembayaran">Choose Payment Method:</label>
                                    <select id="metode_pembayaran" name="metode_pembayaran">
                                        <option value="Mandiri">Mandiri</option>
                                        <option value="BNI">BNI</option>
                                        <option value="BRI">BRI</option>
                                        <option value="DANA">DANA</option>
                                        <option value="Tunai">Tunai</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Bayar</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        @elseif ($fine->status_denda === 'Paid')
                            <a href="" class="btn btn-secondary" @disabled(true)>Bayar sekarang</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
