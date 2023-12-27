<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookCategory; // Assuming your model is named "BookCategory"

class BookCategoryController extends Controller
{
    public function index()
    {
        $categories = BookCategory::all();
        return view('Admin.BookCategory.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.bookcategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:book_category',
        ]);

        $category = new BookCategory;
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category added successfully');
    }

    public function edit($id)
    {
        $category = BookCategory::find($id);
        return view('admin.bookcategory.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:book_category,name,' . $id,
        ]);

        $category = BookCategory::find($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = BookCategory::find($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
