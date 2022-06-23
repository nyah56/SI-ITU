<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Models\Pemesanan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {$pesan = Pemesanan::all();
        return view('pemesanan.pemesanan', compact('pesan'), [
            "title" => "pemesanan",
        ]);
    }
    public function create()
    {$produk = Produk::all();
        $konsumen = Konsumen::all();
        return view('pemesanan.pemesanan-entry', [
            "title" => "pemesanan",
            "Produk" => $produk,
            "Konsumen" => $konsumen,
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id_pesan' => 'required',
            'nama_konsumen' => 'required',
            'nama_produk' => 'required',
            'jumlah' => 'required',
            'alamat' => 'required',
        ]);
        Pemesanan::create([
            'id_pesan' => $request->id_pesan,
            'id_konsumen' => $request->nama_konsumen,
            'id_produk' => $request->nama_produk,
            'jumlah' => $request->jumlah,
            'alamat' => $request->alamat,
        ]);
        toast('Data berhasil ditambahkan', 'success');
        return redirect('/pemesanan');
    }
    public function edit($id_pesan)
    {
        $produk = Produk::all();
        $konsumen = Konsumen::all();
        $pesan = Pemesanan::find($id_pesan);
        return view('pemesanan.pemesanan-edit', compact('pesan'), [
            "title" => "pemesanan",
            "Produk" => $produk,
            "Konsumen" => $konsumen,
        ]);

    }
    public function update(Request $request, $id_pesan)
    {
        $this->validate($request, [

            'nama_konsumen' => 'required',
            'nama_produk' => 'required',
            'jumlah' => 'required',
            'alamat' => 'required',
        ]);
        $pesan = Pemesanan::find($id_pesan);
        $pesan->update([
            'id_konsumen' => $request->nama_konsumen,
            'id_produk' => $request->nama_produk,
            'jumlah' => $request->jumlah,
            'alamat' => $request->alamat,
        ]);
        toast('Data berhasil diubah', 'success');
        return redirect('/pemesanan');
    }
    public function destroy($id_pesan)
    {
        $pesan = Pemesanan::find($id_pesan);
        $pesan->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/pemesanan');
    }
}
