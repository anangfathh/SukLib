

@extends('layouts.member')

@section('content')
<div class="container">
    <h1>Borrow a Book</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bookLoans.borrow', ['book_id' => $book_id]) }}" method="POST">
        @csrf


        <div class="form-group">
            <label for="book_id">Book id:</label>
            <input type="text" class="form-control" id="book_id" name="book_id" value="{{ $book_id }}" disabled>
        </div>

        <div class="form-group">
            <label for="due_date">Peminjaman Sampai:</label>
            <input type="date" class="form-control" id="due_date" name="due_date">
        </div>

        <button type="submit" class="btn btn-primary">Borrow Book</button>
    </form>
</div>
@endsection
