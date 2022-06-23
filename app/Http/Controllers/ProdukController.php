<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use PDF;

class ProdukController extends Controller
{
    //
    public function index()
    {$produk = Produk::all();
        return view('produk.produk', compact('produk'), [
            "title" => "produk",
        ]);

    }
    public function create()
    {

        return view('produk.produk-entry', [

            "title" => "produk",
        ]);

    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_produk' => 'required',
            'nama_produk' => 'required',

        ]);

        Produk::create([
            'id_produk' => $request->id_produk,
            'nama_produk' => $request->nama_produk,
        ]);
        toast('Data berhasil ditambahkan', 'success');
        return redirect('/produk');
    }
    public function edit($id_produk)
    {
        $produk = Produk::find($id_produk);
        return view('produk.produk-edit', compact('produk'), [
            "title" => "produk",
        ]);

    }
    public function update(Request $request, $id_produk)
    {
        $this->validate($request, [

            'nama_produk' => 'required',
        ]);

        $produk = Produk::find($id_produk);
        $produk->update([

            'nama_produk' => $request->nama_produk,
        ]);
        toast('Data berhasil diubah', 'success');
        return redirect('/produk');
    }
    public function destroy($id_produk)
    {
        $produk = Produk::find($id_produk);
        $produk->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/produk');
    }

    public function cetak()
    {
        $data = Produk::all();
        // return view('report.produk', compact('data'));
        $pdf = PDF::loadview('report.produk', ['data' => $data]);
        return $pdf->download('Produk-PDF');
    }
}
