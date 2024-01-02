<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $new = Book::orderBy('created_at', 'desc')->where('status', 'Tersedia')->limit(4)->get();
        $rekomendasi = Book::where('status', 'Tersedia')->orderBy('created_at', 'asc')->limit(6)->get();
        $random = Book::where('status', 'Tersedia')->inRandomOrder()->limit(6)->get();
        return view('user.dashboard', compact('rekomendasi', 'random', 'new'));
    }
}
