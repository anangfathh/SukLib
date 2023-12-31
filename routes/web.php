<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LiterasiController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\AdminBookLoanController;
use App\Http\Controllers\Member\ProfileController;
use App\Http\Controllers\Member\BookListController;
use App\Http\Controllers\Member\BookLoanController;

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
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');


Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('guest');

// ////////////////////////////
// User Page
// ////////////////////////////
Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->name('user-dashboard');

Route::get('/user-riwayat', function () {
    return view('user.riwayat');
})->name('user-riwayat');

Route::get('/user-sumbang', function () {
    return view('user.sumbang');
})->name('user-sumbang');

Route::get('/user-cari', function () {
    return view('user.cari');
})->name('user-cari');

Route::get('/user-profile', function () {
    return view('user.profile');
})->name('user-profile');

Route::get('/books-detail', function () {
    return view('user.books-detail');
})->name('books-detail');

Route::get('/user/literasi', [LiterasiController::class, 'index'])->name('user.literasi');
Route::get('/admin/literasi', [LiterasiController::class, 'adminindex'])->name('admin.literasi');
Auth::routes();


// ////////////////////////////
// Admin Page
// ////////////////////////////

Route::middleware(['auth', 'is_admin'])->group(
    function () {
        Route::get('/admin-dashboard', function () {
            return view('admin.dashboard');
        })->name('admin-dashboard');
        Route::resource('/books/categories', BookCategoryController::class);
        Route::resource('/books', BookController::class);

        Route::resource('/users', UserController::class);
        Route::get('/admin/book-loans', [AdminBookLoanController::class, 'index'])->name('admin.bookloans.index');
    }
);

Route::middleware(['auth', 'is_member'])->group(
    function () {
        Route::get('/member/books', [BookListController::class, 'index'])->name('member.books.index')->middleware('is_member');
        Route::get('/member/books/create', [BookListController::class, 'create'])->name('member.books.create');
        Route::post('/member/books', [BookListController::class, 'store'])->name('member.books.store');
        Route::get('/member/books/{id}', [BookListController::class, 'show'])->name('member.books.show');
        Route::get('/book-loans', [BookLoanController::class, 'index'])->name('bookLoans.index');
        Route::post('/borrow-book/{book_id}', [BookLoanController::class, 'borrowBook'])->name('bookLoans.borrow');
        Route::post('/return-book/{bookLoan_id}', [BookLoanController::class, 'returnBook'])->name('bookLoans.return');
        Route::get('/borrow-book-form/{book_id}', [BookLoanController::class, 'showBorrowForm'])->name('bookLoans.form');
        Route::get('/member/riwayat', [BookLoanController::class, 'index'])->name('member.bookLoans.index');
        Route::get('/fines', [BookLoanController::class, 'fineList'])->name('fines.list');
        Route::post('/pay-fine/{bookLoan_id}', [BookLoanController::class, 'payFine'])->name('fine.pay');
        Route::get('/member/profile', [ProfileController::class, 'index'])->name('member.profile.index');
        Route::put('/member/profile/update/{user_id}', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    }
);
