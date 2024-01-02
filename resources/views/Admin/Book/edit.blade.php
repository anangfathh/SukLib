@extends('admin-layout.master')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Buku</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Buku</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Buku</h5>

                            <!-- Floating Labels Form -->
                            <form method="POST" class="row g-3" action="{{ route('books.update', $book->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="book_id" type="text"
                                            class="form-control @error('book_id') is-invalid @enderror" name="book_id"
                                            value="{{ old('book_id', $book->book_id) }}" required autofocus>

                                        @error('book_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="book_id">{{ __('Book ID') }}</label>

                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <select id="category_id"
                                            class="form-control @error('category') is-invalid @enderror" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category', $book->category) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('category')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="category_id">{{ __('Book Category') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name', $book->name) }}" required>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label for="name">{{ __('Book Name') }}</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <select id="type" class="form-control @error('type') is-invalid @enderror"
                                            name="type" required>
                                            <option value="Hard Copy"
                                                {{ old('type', $book->type) === 'Hard Copy' ? 'selected' : '' }}>Hard Copy
                                            </option>
                                            {{-- <option value="Soft Copy"
                                                {{ old('type', $book->type) === 'Soft Copy' ? 'selected' : '' }}>Soft Copy
                                            </option>
                                            <option value="Audio Book"
                                                {{ old('type', $book->type) === 'Audio Book' ? 'selected' : '' }}>Audio
                                                Book
                                            </option> --}}
                                        </select>
                                        @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="type">{{ __('Book Type') }}</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input id="Rating" type="number"
                                            class="form-control @error('Rating') is-invalid @enderror" name="Rating"
                                            value="{{ old('Rating', $book->Rating) }}" step="0.1" min="0"
                                            max="5" required>

                                        @error('Rating')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="Rating">{{ __('Rating') }}</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input id="desc" type="text"
                                            class="form-control @error('desc') is-invalid @enderror" name="desc"
                                            value="{{ old('desc', $book->desc) }}" required>

                                        @error('desc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="desc">{{ __('Description') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="penulis" type="text"
                                            class="form-control @error('penulis') is-invalid @enderror" name="penulis"
                                            value="{{ old('penulis', $book->penulis) }}" required>

                                        @error('penulis')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label for="penulis">{{ __('Penulis Buku') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="penerbit" type="text"
                                            class="form-control @error('penerbit') is-invalid @enderror" name="penerbit"
                                            value="{{ old('penerbit', $book->penerbit) }}" required>

                                        @error('penerbit')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label for="penerbit">{{ __('Penerbit Buku') }}</label>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <select id="status" class="form-control @error('status') is-invalid @enderror"
                                            name="status">
                                            <option value="Tersedia"
                                                {{ old('status', $book->status) === 'Tersedia' ? 'selected' : '' }}>
                                                Tersedia
                                            </option>
                                            <option value="Dipinjam"
                                                {{ old('status', $book->status) === 'Dipinjam' ? 'selected' : '' }}>
                                                Dipinjam
                                            </option>
                                            <option value="Kosong"
                                                {{ old('status', $book->status) === 'Kosong' ? 'selected' : '' }}>Kosong
                                            </option>
                                        </select>

                                        <label for="status">{{ __('Status') }}</label>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input id="book_image" type="file"
                                        class="form-control @error('book_image') is-invalid @enderror" name="book_image"
                                        accept="image/*">

                                    @error('book_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label class="form-label" for="book_image">{{ __('Book Image') }}</label>
                                </div>



                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Book') }}
                                    </button>
                                </div>
                            </form>
                            <!-- End floating Labels Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
