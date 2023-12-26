@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="book_id">{{ __('Book ID') }}</label>
            <input id="book_id" type="text" class="form-control @error('book_id') is-invalid @enderror" name="book_id" value="{{ old('book_id', $book->book_id) }}" required autofocus>

            @error('book_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">{{ __('Book Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $book->name) }}" required>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">{{ __('Book Category') }}</label>
            <select id="category" class="form-control @error('category') is-invalid @enderror" name="category">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category', $book->category) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="desc">{{ __('Description') }}</label>
            <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc', $book->desc) }}" required>

            @error('desc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Rating">{{ __('Rating') }}</label>
            <input id="Rating" type="number" class="form-control @error('Rating') is-invalid @enderror" name="Rating" value="{{ old('Rating', $book->Rating) }}" step="0.1" min="0" max="5" required>
            
            @error('Rating')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">{{ __('Book Type') }}</label>
            <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" required>
                <option value="Hard Copy" {{ old('type', $book->type) === 'Hard Copy' ? 'selected' : '' }}>Hard Copy</option>
                <option value="Soft Copy" {{ old('type', $book->type) === 'Soft Copy' ? 'selected' : '' }}>Soft Copy</option>
                <option value="Audio Book" {{ old('type', $book->type) === 'Audio Book' ? 'selected' : '' }}>Audio Book</option>
            </select>

            @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">{{ __('Status') }}</label>
            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                <option value="Tersedia" {{ old('status', $book->status) === 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Dipinjam" {{ old('status', $book->status) === 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                <option value="Kosong" {{ old('status', $book->status) === 'Kosong' ? 'selected' : '' }}>Kosong</option>
            </select>

            @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Include other form fields for editing, such as desc, Rating, status, and type -->

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
            {{ __('Update Book') }}
        </button>
    </form>
</div>
@endsection
