<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class test
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
        ->toArray(); // Ubah koleksi menjadi array

    return $this->chart->lineChart()
        ->setTitle('User Registrations')
        ->setSubtitle('Monthly registrations')
        ->addData('Users', array_values($usersPerMonth)) // Gunakan array_values untuk mendapatkan nilai-nilai dari array
        ->setXAxis(array_keys($usersPerMonth)); // Gunakan array_keys untuk mendapatkan kunci-kunci dari array
}
}
