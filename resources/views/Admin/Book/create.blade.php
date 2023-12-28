@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Add New Book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="book_id">Book ID:</label>
            <input type="text" class="form-control" id="book_id" name="book_id" value="{{ old('book_id') }}" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="" disabled selected>Select Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Rating">Rating:</label>
            <input type="number" class="form-control" id="Rating" name="Rating" value="{{ old('Rating') }}" step="0.1" min="0" max="5" required>
        </div>
        <div class="form-group">
            <label for="desc">Desc:</label>
            <input type="text" class="form-control" id="desc" name="desc" value="{{ old('desc') }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select class="form-control" id="type" name="type" required>
                <option value="" disabled selected>Select Category</option>
                <option value="Hard Copy">Hard Copy</option>
                <option value="Soft Copy">Soft Copy</option>
                <option value="Audio Book">Audio Book</option>
            </select>
        </div>
        <!-- Include form fields similar to the create view in the previous response -->
        
        <div class="form-group">
            <label for="book_image">{{ __('Book Image') }}</label>
            <input id="book_image" type="file" class="form-control-file @error('book_image') is-invalid @enderror" name="book_image" accept="image/*">

            @error('book_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Add Book') }}
        </button>
    </form>
</div>
@endsection
