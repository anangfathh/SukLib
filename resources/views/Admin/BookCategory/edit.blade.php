@extends('admin-layout.master')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Book Category</h1>
            <a href="{{ route('categories.index') }}" class="mt-3 btn btn-secondary mb-2">Back to List</a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Member Data</h5>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- Floating Labels Form -->

                            <form method="POST" class="row g-3" action="{{ route('categories.update', $category->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input ype="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $category->name) }}" required />
                                        <label for="name">Category Name Name</label>
                                    </div>
                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
