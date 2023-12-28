@extends('admin-layout.master')

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
                            <h5 class="card-title">Floating labels Form</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" method="POST" action="{{ route('books.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="book_id" name="book_id"
                                            value="{{ old('book_id') }}" required>
                                        <label for="floatingName">Book ID</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="category" name="category" required>
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="category">Category</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name') }}" required>
                                        <label for="floatingpengarang">Book Name</label>
                                    </div>
                                </div>
                                <div class="col-md">
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
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="Rating" name="Rating"
                                            value="{{ old('Rating') }}" step="0.1" min="0" max="5"
                                            required>
                                        <label for="floatingTextarea">Rating :</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" type="text" class="form-control" id="desc" name="desc"
                                            value="{{ old('desc') }}" style="height: 100px"></textarea>
                                        <label for="floatingTextarea">Detail Buku</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="book_image">{{ __('Book Image') }}</label>
                                    <input id="book_image" type="file"
                                        class="form-control-file @error('book_image') is-invalid @enderror"
                                        name="book_image" accept="image/*">

                                    @error('book_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="text-center">
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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Books</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Start Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->


@endsection
