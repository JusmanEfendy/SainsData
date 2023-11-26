<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function index()
    {
        $title = 'Data stunting';
        return view('admin.tables.posyandu', compact('title'));

    }
}
