<?php

namespace App\Charts;

use App\Models\Posyandu;
use App\Models\Stunting;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class kelaminChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $perempuan = Stunting::where('kelamin','P' )->get()->count();
        $laki = Stunting::where('kelamin','L' )->get()->count();



        return $this->chart->barChart()
            ->addData('Perempuan', [$perempuan])
            ->addData('Laki-Laki', [$laki])
            ->setTitle('Diagram gender pasien')
            ->setXAxis(['Banyaknya gender'])
            ->setFontColor('#FFF');

    }
}
