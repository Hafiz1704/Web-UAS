<?php

namespace App\Http\Controllers;

use App\Models\Makul;
use Illuminate\Http\Request;
Use Alert;

class MakulController extends Controller
{
    
    public function index()
    {
        $makul = Makul::get()->sortBy('kode_makul'); //select * from mahasiswa
        return view('makul.index', compact('makul'));
    }

    public function add()
    {
        return view('makul.create');
    }

    public function save(Request $request){
        Makul::create($request->all());
        alert()->success('Selamat!','Berhasil menyimpan data.');
        return redirect()->route('makul');
    }

    public function edit($id){
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id){
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Selamat! Berhasil mengedit data.','success')->autoClose(4000);
        return redirect()->route('makul');
    }

    public function delete(Request $request, $id){
        $makul = Makul::find($id);
        $makul->delete();
        toast('Selamat! Berhasil menghapus data.','success')->autoClose(4000);
        return redirect()->route('makul');
    }
}
