<?php

namespace App\Charts;

use App\Models\Stunting;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use DB;
use Illuminate\Support\Carbon;

class pasienBulananChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $pasien = Stunting::get();
        $data = [];
        $months = [];

        foreach($pasien as $datas) {

        $data[] = $datas->count();
        $months[] = $datas->created_at->format('M');
        }
        // return $this->chart->lineChart()
        //         ->addData('data', $data)
        //         ->setXaxis($months)
        //         ->setTitle('Pasien Bulanan')
        //         ->setFontColor('#FFF')
        //         ->setLabels($months);

        return $this->chart->lineChart()
    ->setTitle('Sales during 2021.')
    ->setSubtitle('Physical sales vs Digital sales.')
    ->setFontColor('#FFF')
    ->addData('Published posts', [4, 9, 5, 2, 1, 8, 3, 9, 6, 5, 7, 3])
    ->addData('Unpublished posts', [7, 2, 7, 2, 5, 4, 8, 3, 9, 1, 6, 9])
    ->addData('Unpublished posts', [7, 2, 7, 2, 5, 4, 8, 3, 9, 1, 6, 9])
    ->addData('Unpublished posts', [7, 2, 7, 2, 5, 4, 8, 3, 9, 1, 6, 9])
    ->addData('Unpublished posts', [7, 2, 7, 2, 5, 4, 8, 3, 9, 1, 6, 9])
    ->addData('Unpublished posts', [7, 2, 7, 2, 5, 4, 8, 3, 9, 1, 6, 9])
    ->setColors(['#ffc63b', '#ff6384'])
    ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}
