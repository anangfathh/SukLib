<!-- resources/views/member/book/create.blade.php -->

@extends('layouts.member')

@section('content')
<div class="container">
    <h1>Create a New Book</h1>
    <form method="POST" action="{{ route('member.books.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="book_id">Book ID</label>
            <input type="text" id="book_id" name="book_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="name">Book Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="desc">Description</label>
            <textarea id="desc" name="desc" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="Rating">Rating</label>
            <input type="number" id="Rating" name="Rating" class="form-control" step="0.1" min="0" max="5" required>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select id="type" name="type" class="form-control" required>
                <option value="Hard Copy">Hard Copy</option>
                <option value="Soft Copy">Soft Copy</option>
                <option value="Audio Book">Audio Book</option>
            </select>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="book_image">Book Image</label>
            <input type="file" id="book_image" name="book_image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Create Book</button>
    </form>
</div>

<h3>Buku Sumbanganmu sebelumnya</h3>
@foreach ($recents as $recent)
    <p>{{ $recent->name }}</p>
@endforeach

@endsection
