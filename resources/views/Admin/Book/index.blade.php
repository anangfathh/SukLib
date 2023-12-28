@extends('admin-layout.master')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Book List</h1>
            <a href="{{ route('books.create') }}" class="mt-3 btn btn-primary mb-3">Add New Book</a>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Book ID</th>
                                        <th scope="col">Book Name</th>
                                        <th scope="col">Rating</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Image</th>
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
                                                    <img src="{{ asset('storage/' . $book->book_image) }}" alt="Book Image"
                                                        width="100">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('books.edit', $book->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('books.show', $book->id) }}"
                                                    class="btn btn-success">Details</a>
                                                <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
