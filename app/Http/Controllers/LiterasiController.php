<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\BookLoan;
use Illuminate\Http\Request;
use App\Charts\TotalLoanChart;
use App\Charts\MemberCountChart;
use App\Charts\TotalMemberChart;
use App\Charts\MemberBulananChart;
use Illuminate\Support\Facades\DB;
use App\Charts\PembacaBulananChart;

class LiterasiController extends Controller
{
    public function index(MemberBulananChart $MemberBulananChart, PembacaBulananChart $PembacaBulananChart, MemberCountChart $MemberCountChart, TotalLoanChart $TotalLoanChart, TotalMemberChart $TotalMemberChart)
{
    $results = DB::table('books_loans')
    ->join('books', 'books_loans.book_id', '=', 'books.id')
    ->join('book_category', 'books.category_id', '=', 'book_category.id')
    ->select('book_category.name', DB::raw('COUNT(*) as count'))
    ->groupBy('book_category.name')
    ->orderByRaw('COUNT(*) DESC')
    ->take(3)
    ->get();

    foreach ($results as $result) {
        echo $result->name;
    }

    $categoryName = $results[0]->name ?? null;
    $categoryName2 = $results[1]->name ?? null;
    $categoryName3 = $results[2]->name ?? null;


    $mostFrequentBookIds = DB::table('books_loans')
            ->select('book_id', DB::raw('COUNT(*) as count'))
            ->groupBy('book_id')
            ->orderBy('count', 'desc')
            ->limit(3)
            ->get();

        // Ambil book_id yang paling banyak muncul pertama
        $firstMostFrequentBookId = $mostFrequentBookIds->get(0)->book_id ?? null;
        // Ambil book_id yang paling banyak muncul kedua
        $secondMostFrequentBookId = $mostFrequentBookIds->get(1)->book_id ?? null;
        // Ambil book_id yang paling banyak muncul ketiga
        $thirdMostFrequentBookId = $mostFrequentBookIds->get(2)->book_id ?? null;

        // Ambil nama buku berdasarkan book_id yang paling banyak muncul
        $firstBookName = DB::table('books')->where('id', $firstMostFrequentBookId)->value('name');
        $secondBookName = DB::table('books')->where('id', $secondMostFrequentBookId)->value('name');
        $thirdBookName = DB::table('books')->where('id', $thirdMostFrequentBookId)->value('name');


    $TotalLoan = DB::table('books_loans')
    ->whereNotNull('date_returned')
    ->count();

    $TotalMemberChart = $TotalMemberChart->build();
    $TotalLoanChart = $TotalLoanChart->build();
    $MemberCountChart = $MemberCountChart->build();
    $MemberBulananChart = $MemberBulananChart->build();
    $PembacaBulananChart = $PembacaBulananChart->build();

    return view('user.literasi', compact('MemberBulananChart', 'PembacaBulananChart', 'categoryName', 'categoryName2', 'categoryName3' ,'result', 'MemberCountChart', 'TotalLoan', 'TotalLoanChart', 'firstBookName', 'secondBookName', 'thirdBookName', 'TotalMemberChart'));
}
}
