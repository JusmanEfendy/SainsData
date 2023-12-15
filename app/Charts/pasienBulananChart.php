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
        $data[] = Stunting::get();
        $bulan[] = Stunting::select('created_at')->get()->groupBy('created_at');
        foreach($data as $datas) {
            $data[]=$datas->created_at->count();
            $bulan[]=$bulan;
        }
        return $this->chart->lineChart()
                ->addData('data', [$data])
                ->setXAxis($bulan);
    }
}
