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
    ->setTitle('Informasi balita di setiap Kelompok Posyandu Tahun 2023.')
    ->setSubtitle('Mengetahui ada berapa saja balita yang konsul ke posyandu terdekat.')
    ->setFontColor('#FFF')
    ->addData('Buin Jeringo', [4, 9, 5, 2, 1, 8, 3, 9, 6, 5, 7, 3])
    ->addData('Bunga Cermai', [8, 3, 7, 2, 5, 4, 8, 3, 9, 1, 6, 9])
    ->addData('Bunga Kamboja', [7, 1, 9, 3, 5, 8, 9, 3, 4, 7, 1, 7])
    ->addData('Bunga Melati', [9, 2, 3, 5, 7, 2, 7, 2, 5, 7, 2, 9])
    ->addData('Goal Manis', [2, 6, 8, 7, 4, 8, 3, 8, 1, 8, 3, 7])
    ->addData('Pisang Kemang', [5, 3, 5, 7, 2, 8, 1, 7, 8, 2, 4, 3])
    // ->setColors(['#ffc63b', '#ff6384'])
    ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}
