@extends('layouts.master')

@section('content')
<div class="container">
    <h1>{{ $book->name }}</h1>

    <ul>
        <li><strong>Book ID:</strong> {{ $book->book_id }}</li>
        <li><strong>Category:</strong> {{ $book_category}}</li>
        <li><strong>User:</strong> {{ $book->user->name }}</li>
        <li><strong>Description:</strong> {{ $book->desc }}</li>
        <li><strong>Date of Entrance:</strong> {{ $book->created_at->format('Y-m-d') }}</li>
        <li><strong>Status:</strong> {{ $book->status }}</li>
        <li><strong>Type:</strong> {{ $book->type }}</li>
        <li><strong>Rating:</strong> {{ $book->Rating }}</li>
        <li><strong>Picture:</strong> 
                                    @if ($book->book_image)
                            <img src="{{ asset('storage/' . $book->book_image) }}" alt="Book Image" width="100">
                        @else
                            No Image
                        @endif
        </li>
        <!-- Add more details as needed -->
    </ul>

    <a href="{{ route('books.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
