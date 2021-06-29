<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswa = Mahasiswa::all(); //select * from nama_table;
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.mahasiswa.create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id); //select * from nam_table where id = $id;
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete($id);
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('mahasiswa');
    }
   
}
