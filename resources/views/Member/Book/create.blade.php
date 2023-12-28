<!-- resources/views/member/book/create.blade.php -->

@extends('layout.after-login')
@section('content')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Layouts</h1>
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
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Layouts</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sumbang Buku</h5>

                            <!-- Floating Labels Form -->
                            <form method="POST" action="{{ route('member.books.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md mt-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="book_id" name="book_id"
                                            value="{{ old('book_id') }}" required>
                                        <label for="floatingName">Book ID</label>
                                    </div>
                                </div>
                                <div class="col-md mt-3">
                                    <div class="form-floating mb">
                                        <select class="form-select" id="category" name="category" required>
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="category">Category</label>
                                    </div>
                                </div>
                                <div class="col-md mt-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name') }}" required>
                                        <label for="floatingpengarang">Book Name</label>
                                    </div>
                                </div>
                                <div class="col-md mt-3">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="type" name="type" aria-label="State"
                                            required>
                                            <option value="" disabled selected>Select Category</option>
                                            <option value="Hard Copy">Hard Copy</option>
                                            <option value="Soft Copy">Soft Copy</option>
                                            <option value="Audio Book">Audio Book</option>
                                        </select>
                                        <label for="type">Type</label>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="Rating" name="Rating"
                                            value="{{ old('Rating') }}" step="0.1" min="0" max="5"
                                            required>
                                        <label for="floatingTextarea">Rating :</label>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" type="text" class="form-control" id="desc" name="desc"
                                            value="{{ old('desc') }}" style="height: 100px"></textarea>
                                        <label for="floatingTextarea">Detail Buku</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select id="category_id" name="category_id" class="form-control" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="book_image">{{ __('Book Image') }}</label>
                                    <input id="book_image" type="file"
                                        class="form-control @error('book_image') is-invalid @enderror" name="book_image"
                                        accept="image/*">

                                    @error('book_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Book') }}
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Reset
                                    </button>
                                </div>
                            </form>
                            <!-- End floating Labels Form -->
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="col-lg-6">
                    <h1 class="thx">TERIMA KASIH TELAH
                        <h1 class="thx menyumbang">MENYUMBANG!</h1>
                    </h1>
                    <div class="row thx2">
                        <div class="thx-container mt-5">
                            <span class="thx-text">Sumbangan mu sebelumnya</span>
                            <div class="row align-items-start thx2-container">
                                <div class="container-sm gap-3 d-flex">
                                    @foreach ($recents as $recent)
                                        <div class="col-lg-2 mt-3" style="padding-right: 20px;">
                                            <!-- Card kedua -->
                                            <div class="card">
                                                @if ($recent->book_image)
                                                    <img src="{{ asset('storage/' . $recent->book_image) }}"
                                                        alt="Book Image" width="100" class="align-self-center">
                                                @else
                                                    No Image
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $recent->name }}</h5>
                                                    <p style="font-size: 12px;">{{ $recent->category_id }}</p>
                                                </div>
                                            </div><!-- End Card kedua -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
