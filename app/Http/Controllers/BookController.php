<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookCategory;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }

    public function create()
    {
        $categories = BookCategory::all();
        return view('admin.book.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|unique:books',
            'name' => 'required',
            'desc' => 'required',
            'Rating' => 'required|numeric|max:5.0',
            'type' => 'required|in:Hard Copy,Soft Copy,Audio Book',
            'category_id' => 'required|exists:book_category,id',
            'penulis' => 'required',
            'penerbit' => 'required',
        ]);

        $book = new Book;
        $book->book_id = $request->input('book_id');
        $book->name = $request->input('name');
        $book->user_id = auth()->user()->id;
        $book->desc = $request->input('desc');
        $book->Rating = $request->input('Rating');
        $book->type = $request->input('type');
        $book->category_id = $request->input('category_id');
        $book->penulis = $request->input('penulis');
        $book->penerbit = $request->input('penerbit');
        if ($request->hasFile('book_image')) {
            $imagePath = $request->file('book_image')->store('book_images', 'public');
            $book->book_image = $imagePath;
        }
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book added successfully');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = BookCategory::all();
        return view('admin.book.edit', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
            'book_id' => 'required|unique:books,book_id,' . $id,
            'name' => 'required',
            'desc' => 'required',
            'Rating' => 'required|numeric|max:5.0',
            'status' => 'required|in:Tersedia,Dipinjam,Kosong',
            'type' => 'required|in:Hard Copy,Soft Copy,Audio Book',
            'category_id' => 'required|exists:book_category,id',
            'penulis' => 'required',
            'penerbit' => 'required',
        ]);

        $book->book_id = $request->input('book_id');
        $book->name = $request->input('name');
        $book->desc = $request->input('desc');
        $book->Rating = $request->input('Rating');
        $book->status = $request->input('status');
        $book->type = $request->input('type');
        $book->category_id = $request->input('category_id');
        $book->penulis = $request->input('penulis');
        $book->penerbit = $request->input('penerbit');
        if ($request->hasFile('book_image')) {
            $imagePath = $request->file('book_image')->store('book_images', 'public');
            $book->book_image = $imagePath;
        }
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $book_category = BookCategory::findOrFail($book->category_id);
        $book_category = $book_category->name; // Assuming you have a "Book" model

        return view('admin.book.show', compact('book', 'book_category'));
    }


    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
