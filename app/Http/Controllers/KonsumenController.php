<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use PDF;

class KonsumenController extends Controller
{
    //
    public function index()
    {
        $konsumen = Konsumen::all();
        return view('konsumen.konsumen', compact('konsumen'), [
            "title" => "konsumen",
        ]);
    }
    public function create()
    {
        return view('konsumen.konsumen-entry', [
            "title" => "konsumen",
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_konsumen' => 'required',
            'nama_konsumen' => 'required',
            'contact' => 'required',
            'alamat' => 'required',
        ]);
        Konsumen::create([
            'id_konsumen' => $request->id_konsumen,
            'nama_konsumen' => $request->nama_konsumen,
            'contact' => $request->contact,
            'alamat' => $request->alamat,
        ]);
        toast('Data berhasil ditambahkan', 'success');
        return redirect('/konsumen');
    }
    public function edit($id_konsumen)
    {
        $konsumen = Konsumen::find($id_konsumen);
        return view('konsumen.konsumen-edit', compact('konsumen'), [
            "title" => "konsumen",
        ]);
    }
    public function update(Request $request, $id_konsumen)
    {
        $this->validate($request, [
            'nama_konsumen' => 'required',
            'contact' => 'required',
            'alamat' => 'required',
        ]);
        $konsumen = Konsumen::find($id_konsumen);
        $konsumen->update([
            'nama_konsumen' => $request->nama_konsumen,
            'contact' => $request->contact,
            'alamat' => $request->alamat,
        ]);
        toast('Data berhasil diubah', 'success');
        return redirect('/konsumen');
    }
    public function destroy($id_konsumen)
    {
        $konsumen = Konsumen::find($id_konsumen);
        $konsumen->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/konsumen');
    }
    public function cetak()
    {
        $data = Konsumen::all();
        // return view('report.konsumen', compact('data'));
        $pdf = PDF::loadview('report.konsumen', ['data' => $data]);
        return $pdf->download('Konsumen-PDF');
    }

}
