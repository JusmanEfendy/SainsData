<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use App\Models\Posyandu;
use App\Models\Stunting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Data stunting';
        
        if($request->has('search')) {
            $searchTerm = $request->search;

            $datas = Stunting::where('nama', 'LIKE', '%' .$request->search. '%')->orWhereHas('dusun', function ($query) use ($searchTerm) {
                $query->where('nama_dusun', 'LIKE', '%' . $searchTerm . '%');
            })->orWhere('nama_ortu', 'LIKE', '%' . $request->search . '%')->paginate(5);
        }else {
            $datas = Stunting::orderBy('nama', 'asc')->paginate(5);
        }
        return view('admin.posyandu.index', compact('title', 'datas'));

    }

    public function create()
    {
        $title = 'Tambah Data';

        $posyandu = Posyandu::get();
        $dusun = Dusun::get();

        return view('admin.posyandu.create', compact('title', 'posyandu', 'dusun'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
            'nama_ortu' => 'required|string|max:255',
            'kode_posyandu' => 'required|max:8',
            'kode_dusun' => 'required|max:8',
            'usia_ukur' => 'nullable'
        ]);

        $usia_ukur = Carbon::parse($request->tanggal_lahir)->diff(Carbon::now());

        Stunting::create([
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ortu' => $request->nama_ortu,
            'kode_posyandu' => $request->kode_posyandu,
            'kode_dusun' => $request->kode_dusun,
            'usia_ukur' => $usia_ukur->format('%y Tahun - %m Bulan - %d Hari'),
        ]);

        return redirect()->route('posyandu')->with('success', 'Data Stunting berhasil ditambah');
    }

    public function edit($id)
    {
        $title = 'Edit Data';

        $datas = Stunting::where('id', $id)->first();
        $posyandu = Posyandu::get();
        $dusun = Dusun::get();

        return view('admin.posyandu.edit', compact('title', 'datas', 'posyandu', 'dusun'));
    }

    public function update(Request $request, string $id) 
    {
        $stunting = Stunting::findOrFail($id);
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
            'nama_ortu' => 'required|string|max:255',
            'kode_posyandu' => 'required|max:8',
            'kode_dusun' => 'required|max:8',
            'usia_ukur' => 'nullable'
        ]);

        $usia_ukur = Carbon::parse($request->tanggal_lahir)->diff(Carbon::now());

        $stunting->update([
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ortu' => $request->nama_ortu,
            'kode_posyandu' => $request->kode_posyandu,
            'kode_dusun' => $request->kode_dusun,
            'usia_ukur' => $usia_ukur->format('%y Tahun - %m Bulan - %d Hari'),
        ]);

        return redirect()->route('posyandu')->with('success', 'Data Stunting berhasil diubah');
    }

    public function destroy($id)
    {
        $datas = Stunting::findOrFail($id);

        $datas->destroy($id);
        return redirect()->route('posyandu');
    }
}
