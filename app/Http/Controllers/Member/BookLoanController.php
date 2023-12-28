<?php

namespace App\Http\Controllers\Member;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\BookLoan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookLoanController extends Controller
{
    public function index()
    {

        $bookLoans = BookLoan::all();

        foreach ($bookLoans as $bookLoan) {
            if (Carbon::now() > $bookLoan->due_date and $bookLoan->date_returned === null) {
                $daysOverdue = Carbon::now()->diffInDays($bookLoan->due_date);
                $denda = $daysOverdue * 1000;

                $bookLoan->denda = $denda;
                $bookLoan->status_denda = 'Unpaid';
                $bookLoan->save();
            }
        }
        $bookLoans = BookLoan::all()->where('user_id', Auth::user()->id);

        return view('member.riwayat.index', compact('bookLoans'));
    }

    public function showBorrowForm($book_id)
    {
        return view('member.bookloan.create', compact('book_id'));
    }


    public function borrowBook(Request $request, $book_id)
    {
        // Validasi peminjaman buku
        $request->validate([
            'date_returned' => 'nullable|date',
            'due_date' => 'date'
        ]);

        // Mendapatkan buku yang akan dipinjam
        $book = Book::findOrFail($book_id);

        // Mendapatkan tanggal peminjaman saat ini
        $dateBorrowed = Carbon::now();

        // Menghitung tanggal jatuh tempo (2 minggu setelah tanggal peminjaman)
        $dueDate = $request->due_date;

        // Menghitung denda (jika buku tidak dikembalikan tepat waktu)
        $denda = 0;
        $dateReturned = $request->input('date_returned');

        if ($dateReturned !== null and Carbon::parse($dateReturned)->gt($dueDate)) {
            $daysOverdue = Carbon::parse($dateReturned)->diffInDays($dueDate);
            $denda = $daysOverdue * 1000;
        }

        // Membuat entri peminjaman buku
        $bookLoan = new BookLoan();
        $bookLoan->user_id = Auth::user()->id;
        $bookLoan->book_id = $book_id;
        $bookLoan->date_borrowed = $dateBorrowed;
        $bookLoan->date_returned = $dateReturned;
        $bookLoan->due_date = $dueDate;
        $bookLoan->denda = $denda;
        $bookLoan->save();

        $book = Book::findOrFail($bookLoan->book_id);
        $book->status = 'Dipinjam';
        $book->save();

        return redirect()->back()->with('success', 'Peminjaman buku berhasil.');
    }

    public function returnBook(Request $request, $bookLoan_id)
    {
        // Validasi pengembalian buku
        $request->validate([
            'date_returned' => 'required|date',
        ]);

        // Mendapatkan informasi peminjaman buku
        $bookLoan = BookLoan::findOrFail($bookLoan_id);

        // Mengatur tanggal pengembalian buku
        $dateReturned = Carbon::parse($request->input('date_returned'));

        // Menghitung denda (jika buku dikembalikan terlambat)
        $dueDate = Carbon::parse($bookLoan->due_date);
        $denda = 0;

        if ($dateReturned->gt($dueDate)) {
            $daysOverdue = $dateReturned->diffInDays($dueDate);
            $denda = $daysOverdue * 1000;
        }

        // Memperbarui informasi peminjaman buku
        $bookLoan->date_returned = $dateReturned;
        $bookLoan->denda = $denda;
        $bookLoan->save();

        // Memperbarui status buku menjadi Tersedia
        $book = Book::findOrFail($bookLoan->book_id);
        $book->status = 'Tersedia';
        $book->save();

        return redirect()->back()->with('success', 'Pengembalian buku berhasil.');
    }

    public function fineList()
    {
        $fines = BookLoan::where('user_id', Auth::user()->id)->where('denda', '!=', 0)->get();

        return view('member.riwayat.denda', compact('fines'));
    }

    public function payFine(Request $request, $bookLoan_id)
    {
        $bookLoan = BookLoan::findOrFail($bookLoan_id);

        $request->validate([
            'metode_pembayaran' => 'required',
        ]);

        $bookLoan->status_denda = 'Paid';
        $bookLoan->date_returned = Carbon::now();
        $bookLoan->metode_pembayaran = $request->metode_pembayaran;

        $bookLoan->save();

        return redirect()->back()->with('success', 'Pembayaran denda berhasil');
    }
}
