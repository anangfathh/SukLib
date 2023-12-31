<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PembacaBulananChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $bookloans = DB::table('books_loans')
        ->select(DB::raw('DATE_FORMAT(date_borrowed, "%Y-%m") as month'), DB::raw('count(*) as count'))
        ->groupBy('month')
        ->get()
        ->pluck('count', 'month')
        ->toArray();

        return $this->chart->barChart()
        ->setTitle('Pembaca Bulanan')
        ->addData('Pembaca', array_values($bookloans))
        ->setXAxis(array_keys($bookloans));
    }
}
