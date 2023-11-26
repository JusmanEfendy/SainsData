<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function index()
    {
        $title = 'Data stunting';
        return view('admin.posyandu.index', compact('title'));

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
