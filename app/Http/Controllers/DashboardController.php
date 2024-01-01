<?php

namespace App\Http\Controllers;

use App\Charts\KelaminChart;
use App\Charts\pasienBulananChart;
use App\Charts\PosyanduChart;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(PosyanduChart $posyanduChart,
     pasienBulananChart $pasienBulananChart,
     kelaminChart $kelaminChart )
    {
        $title = 'Dashboard';

        $kelompokPosyandu = Posyandu::get();
        // dd($kelompokPosyandu);
        $posyanduChart = $posyanduChart->build();
        $pasienBulananChart = $pasienBulananChart->build();
        $kelaminChart = $kelaminChart->build();
        return view('admin.dashboard', compact('title', 'posyanduChart', 'kelompokPosyandu', 'pasienBulananChart', 'kelaminChart'));
    }
}
