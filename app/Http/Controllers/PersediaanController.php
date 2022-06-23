<?php

namespace App\Http\Controllers;

use App\Models\Persediaan;
use App\Models\Petani;
use App\Models\Produk;
use Illuminate\Http\Request;
use PDF;

class PersediaanController extends Controller
{
    //
    public function index()
    {$persediaan = Persediaan::all();
        return view('persediaan.persediaan', compact('persediaan'), [
            "title" => "persediaan",

        ]);
    }
    public function create()
    {$produk = Produk::all(); //passing tergantung jumlah
        $petani = Petani::all();
        return view('persediaan.persediaan-entry', [
            "title" => "persediaan",
            "Produk" => $produk,
            "Petani" => $petani,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_persediaan' => 'required',
            'nama_produk' => 'required',
            'nama_petani' => 'required',
            'masa_kadaluarsa' => 'required',
            'jumlah' => 'required',
        ]);
        Persediaan::create([
            'id_persediaan' => $request->id_persediaan,
            'id_produk' => $request->nama_produk,
            'id_petani' => $request->nama_petani,
            'masa_kadaluarsa' => $request->masa_kadaluarsa,
            'jumlah' => $request->jumlah,
        ]);
        toast('Data berhasil ditambahkan', 'success');
        return redirect('/persediaan');
    }
    public function edit($id_persediaan)
    { //passing tergantung jumlah
        $produk = Produk::all();
        $petani = Petani::all();
        $persediaan = Persediaan::find($id_persediaan);
        return view('persediaan.persediaan-edit', [
            'title' => 'persediaan',
            'persediaan' => $persediaan,
            "Produk" => $produk,
            "Petani" => $petani,
        ]);
    }
    public function update(Request $request, $id_persediaan)
    {
        $this->validate($request, [

            'nama_produk' => 'required',
            'nama_petani' => 'required',
            'masa_kadaluarsa' => 'required',
            'jumlah' => 'required',
        ]);
        $persediaan = Persediaan::find($id_persediaan);
        $persediaan->update([

            'id_produk' => $request->nama_produk,
            'id_petani' => $request->nama_petani,
            'masa_kadaluarsa' => $request->masa_kadaluarsa,
            'jumlah' => $request->jumlah,
        ]);
        toast('Data berhasil diubah', 'success');
        return redirect('/persediaan');
    }
    public function destroy($id_persediaan)
    {$persediaan = Persediaan::find($id_persediaan);
        $persediaan->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/persediaan');
    }
    public function cetak()
    {
        $data = Persediaan::all();
        // return view('report.persediaan', compact('data'));
        $pdf = PDF::loadview('report.persediaan', ['data' => $data]);
        return $pdf->download('Persediaan-PDF');
    }
}
