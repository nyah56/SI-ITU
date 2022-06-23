<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    //
    public function index()
    {
        $petani = Petani::all();
        return view('petani.petani', compact('petani'), [
            "title" => "petani",
        ]);
    }
    public function create()
    {
        return view('petani.petani-entry', [
            "title" => "petani",
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_petani' => 'required',
            'nama_petani' => 'required',
            'contact' => 'required',
            'alamat' => 'required',

        ]);
        Petani::create([
            'id_petani' => $request->id_petani,
            'nama_petani' => $request->nama_petani,
            'contact' => $request->contact,
            'alamat' => $request->alamat,
        ]);
        toast('Data berhasil ditambahkan', 'success');
        return redirect('/petani');
    }
    public function edit($id_petani)
    {
        $petani = Petani::find($id_petani);
        return view('petani.petani-edit', compact('petani'), [
            "title" => "petani",
        ]);
    }
    public function update(Request $request, $id_petani)
    {
        $this->validate($request, [

            'nama_petani' => 'required',
            'contact' => 'required',
            'alamat' => 'required',

        ]);
        $petani = Petani::find($id_petani);
        $petani->update([

            'nama_petani' => $request->nama_petani,
            'contact' => $request->contact,
            'alamat' => $request->alamat,
        ]);
        toast('Data berhasil diubah', 'success');
        return redirect('/petani');
    }
    public function destroy($id_petani)
    {
        $petani = Petani::find($id_petani);
        $petani->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/petani');
    }
}
