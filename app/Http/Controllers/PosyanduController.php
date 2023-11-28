<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use App\Models\Posyandu;
use App\Models\Stunting;
use Carbon\Carbon;

class PosyanduController extends Controller
{
    public function index()
    {
        $title = 'Data stunting';
        $datas = Stunting::orderBy('id', 'desc')->paginate(5);
        return view('admin.posyandu.index', compact('title', 'datas'));

    }

    public function create()
    {
        $title = 'Tambah Data';

        $posyandu = Posyandu::get();
        $dusun = Dusun::get();

        return view('admin.posyandu.create', compact('title', 'posyandu', 'dusun'));
    }

    public function edit($id)
    {
        $title = 'Edit Data';

        $datas = Stunting::where('id', $id)->first();
        $posyandu = Posyandu::get();
        $dusun = Dusun::get();

        $usia_ukur = Carbon::parse($datas->tanggal_lahir)->diff(Carbon::now());
        // dd($usia_ukur);

        return view('admin.posyandu.edit', compact('title', 'datas', 'posyandu', 'dusun', 'usia_ukur'));
    }
}
