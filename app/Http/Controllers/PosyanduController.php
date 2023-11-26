<?php

namespace App\Http\Controllers;

use App\Models\Stunting;
use Illuminate\Http\Request;

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
        return view('admin.posyandu.create', compact('title'));
    }

    public function edit()
    {
        $title = 'Edit Data';
        return view('admin.posyandu.edit', compact('title'));
    }
}
