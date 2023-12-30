<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalMemberChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {

        $count = DB::table('users')->count('name');
        return $this->chart->donutChart()
            ->setTitle('Jumlah Member Perpustakaan')
            ->addData([$count, 5])
            ->setLabels(['Member', '']);

    }
}
