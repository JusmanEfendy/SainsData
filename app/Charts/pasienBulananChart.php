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
        // $stunting = Stunting::get();
        // $created_at = Stunting::select('created_at')->get()->groupBy('created_at');
        // $data = [];
        // $bulan = [];
        // foreach($stunting as $datas) {
        //     $data[] = $datas->count();
        //     $bulan[] = $created_at;
        // }

        return $this->chart->lineChart()
        ->setTitle('Sales during 2021.')
        ->setSubtitle('Physical sales vs Digital sales.')
        ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
        ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
        ->setFontColor('#FFF')
        // ->setWidth(250)
        // ->setHeight(250)
        ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
        }
}
