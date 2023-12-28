<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\Member\BookListController;
use App\Http\Controllers\Member\BookLoanController;
use App\Http\Controllers\Member\ProfileController;
use App\Http\Controllers\AdminBookLoanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/books/categories', BookCategoryController::class);
Route::resource('/books', BookController::class);
Route::resource('/users', UserController::class);



// Rute untuk menampilkan daftar buku (index)
Route::get('/member/books', [BookListController::class, 'index'])->name('member.books.index');

// Rute untuk menampilkan formulir tambah buku (create)
Route::get('/member/books/create', [BookListController::class, 'create'])->name('member.books.create');

// Rute untuk menyimpan buku yang baru ditambahkan (store)
Route::post('/member/books', [BookListController::class, 'store'])->name('member.books.store');

// Rute untuk menampilkan detail buku (show)
Route::get('/member/books/{id}', [BookListController::class, 'show'])->name('member.books.show');

Route::get('/book-loans', [BookLoanController::class, 'index'])->name('bookLoans.index');

// Route for borrowing a book
Route::post('/borrow-book/{book_id}', [BookLoanController::class, 'borrowBook'])->name('bookLoans.borrow');

// Route for returning a book
Route::post('/return-book/{bookLoan_id}', [BookLoanController::class, 'returnBook'])->name('bookLoans.return');

Route::get('/borrow-book-form/{book_id}', [BookLoanController::class, 'showBorrowForm'])->name('bookLoans.form');

Route::get('/member/riwayat', [BookLoanController::class, 'index'])->name('member.bookLoans.index');

// Import the controller at the top of the web.php file

// Route for displaying the list of fines
Route::get('/fines', [BookLoanController::class, 'fineList'])->name('fines.list');

// Route for paying a fine
Route::post('/pay-fine/{bookLoan_id}', [BookLoanController::class, 'payFine'])->name('fine.pay');


// Route for the profile index page
Route::get('/member/profile', [ProfileController::class, 'index'])->name('member.profile.index');
Route::put('/member/profile/update/{user_id}', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/admin/book-loans', [AdminBookLoanController::class, 'index'])->name('admin.bookloans.index');
