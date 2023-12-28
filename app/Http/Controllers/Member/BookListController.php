<?php

namespace App\Http\Controllers\Member;

use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookListController extends Controller
{
    public function index()
    {
        $books = Book::all()->where('status', 'Tersedia');
        return view('member.book.index', compact('books'));
    }

    public function create()
    {
        $categories = BookCategory::all();
        $recents = Book::where('user_id', auth()->user()->id)
            ->latest()
            ->take(3)
            ->get();
        return view('member.book.create', compact('categories', 'recents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|unique:books',
            'name' => 'required',
            'desc' => 'required',
            'Rating' => 'required|numeric|max:5.0',
            'type' => 'required|in:Hard Copy,Soft Copy,Audio Book',
            'category' => 'required|exists:book_category,id',
        ]);

        $book = new Book;
        $book->book_id = $request->input('book_id');
        $book->name = $request->input('name');
        $book->user_id = auth()->user()->id;
        $book->desc = $request->input('desc');
        $book->Rating = $request->input('Rating');
        $book->type = $request->input('type');
        $book->category = $request->input('category');
        if ($request->hasFile('book_image')) {
            $imagePath = $request->file('book_image')->store('book_images', 'public');
            $book->book_image = $imagePath;
        }
        $book->save();

        return redirect()->route('member.books.index')->with('success', 'Book added successfully');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $book_category = BookCategory::findOrFail($book->category);
        $book_category = $book_category->name; // Assuming you have a "Book" model

        return view('member.book.show', compact('book', 'book_category'));
    }
}
