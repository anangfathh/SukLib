<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MemberBulananChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $usersPerMonth = DB::table('users')
        ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('count(*) as count'))
        ->groupBy('month')
        ->get()
        ->pluck('count', 'month')
        ->toArray();

        return $this->chart->lineChart()
        ->setTitle('Pertambahan Member')
        ->addData('Users', array_values($usersPerMonth))
        ->setXAxis(array_keys($usersPerMonth));
    }
}
