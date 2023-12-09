<?php

namespace App\Http\Controllers;

use App\Charts\PosyanduChart;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(PosyanduChart $posyanduChart)
    {
        $title = 'Dashboard';

        $kelompokPosyandu = Posyandu::get();
        // dd($kelompokPosyandu);
        $posyanduChart = $posyanduChart->build();
        return view('admin.dashboard', compact('title', 'posyanduChart', 'kelompokPosyandu'));
    }
}
