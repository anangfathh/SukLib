<?php

namespace App\Charts;

use App\Models\BookLoan;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalLoanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $loan = BookLoan::get();

        $data = [
            $loan->where('denda', '0')->count(),
            $loan->whereNotIn('denda', ['0'])->count()
        ];

        $label =[
            'Tepat Waktu',
            'Terlambat'
        ];

        return $this->chart->donutChart()
            ->setTitle('Total Peminjam')
            ->addData($data)
            ->setLabels($label);
    }
}
