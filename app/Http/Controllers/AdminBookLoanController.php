<?php

namespace App\Http\Controllers;

use App\Models\BookLoan;

class AdminBookLoanController extends Controller
{
    public function index()
    {
        $bookLoans = BookLoan::all();

        return view('admin.riwayat.index', compact('bookLoans'));
    }
}
