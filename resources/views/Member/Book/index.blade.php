@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Books</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Book ID</th>
                <th>Name</th>
                <th>Rating</th>
                <th>Status</th>
                <th>Type</th>
                <th>Book Images</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->book_id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->Rating }}</td>
                    <td>{{ $book->status }}</td>
                    <td>{{ $book->type }}</td>
                    <td>
                        @if ($book->book_image)
                            <img src="{{ asset('storage/' . $book->book_image) }}" alt="Book Image" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('member.books.show', $book->id) }}" class="btn btn-success">Details</a>
                        {{-- <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
