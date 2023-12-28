{{-- resources/views/member/riwayat/index.blade.php --}}
@extends('layouts.master') {{-- Adjust based on your layout file --}}

@section('content')

<div class="container">
    <h1>Book Loan History</h1>

    {{-- Table for displaying book loans --}}
    <table class="table table-bordered">
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
            {{-- Loop through the book loans and display each one --}}
            @foreach ($bookLoans as $loan)
                <tr>
                    <td>{{ $loan->book->name }}</td>
                    <td>{{ $loan->book->category->name }}</td>
                    <td>{{ $loan->book->type }}</td>
                    <td>{{ $loan->date_borrowed }}</td>
                    <td>{{ $loan->due_date }}</td>
                    <td>{{ $loan->user_id }}</td>
                    <td>
                        @if ($loan->date_returned === null && now() < $loan->due_date)
                            Currently Borrowed
                        @elseif ($loan->date_returned !== null)
                            Returned
                        @elseif (now() > $loan->due_date && $loan->date_returned === null)
                            Overdue
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
