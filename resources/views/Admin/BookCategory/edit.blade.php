@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Edit Category</h2>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-2">Back to List</a>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>
@endsection
