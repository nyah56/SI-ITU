<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Konsumen;
use App\Models\Pemesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use PDF;

class JadwalController extends Controller
{
    //
    public function index()
    {$jadwal = Jadwal::all();
        return view('jadwal.jadwal', compact('jadwal'), [
            "title" => "jadwal",
        ]);
    }
    public function create()
    {$pemesanan = Pemesanan::all();
        $konsumen = Konsumen::all();
        $produk = Produk::all();
        return view('jadwal.jadwal-entry', [
            "title" => "jadwal",
            "Pesan" => $pemesanan,
            "Produk" => $produk,
            "Konsumen" => $konsumen,
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id_jadwal' => 'required',
            'id_pesan' => 'required',
            'nama_konsumen' => 'required',
            'nama_produk' => 'required',
            'kirim_hari' => 'required',
            'jumlah' => 'required',
            'alamat' => 'required',
        ]);
        Jadwal::create([
            'id_jadwal' => $request->id_jadwal,
            'id_pesan' => $request->id_pesan,
            'id_konsumen' => $request->nama_konsumen,
            'id_produk' => $request->nama_produk,
            'kirim_hari' => $request->kirim_hari,
            'jumlah' => $request->jumlah,
            'alamat' => $request->alamat,
        ]);
        toast('Data berhasil ditambahkan', 'success');
        return redirect('/jadwal');
    }
    public function edit($id_jadwal)
    {
        $jadwal = Jadwal::find($id_jadwal);
        $pemesanan = Pemesanan::all();
        $konsumen = Konsumen::all();
        $produk = Produk::all();
        return view('jadwal.jadwal-edit', compact('jadwal'), [
            "title" => "jadwal",
            "Pesan" => $pemesanan,
            "Produk" => $produk,
            "Konsumen" => $konsumen,
        ]);
    }
    public function update(Request $request, $id_jadwal)
    {
        $jadwal = Jadwal::find($id_jadwal);
        $this->validate($request, [
            'id_pesan' => 'required',
            'nama_konsumen' => 'required',
            'nama_produk' => 'required',
            'kirim_hari' => 'required',
            'jumlah' => 'required',
            'alamat' => 'required',
        ]);
        $jadwal->update([
            'id_pesan' => $request->id_pesan,
            'id_konsumen' => $request->nama_konsumen,
            'id_produk' => $request->nama_produk,
            'kirim_hari' => $request->kirim_hari,
            'jumlah' => $request->jumlah,
            'alamat' => $request->alamat,
        ]);
        toast('Data berhasil diubah', 'success');
        return redirect('/jadwal');
    }
    public function destroy($id_jadwal)
    {
        $jadwal = Jadwal::find($id_jadwal);
        $jadwal->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/jadwal');
    }
    public function cetak()
    {
        $jadwal = Jadwal::all();
        // return view('report.jadwal', compact('jadwal'));
        $pdf = PDF::loadview('report.jadwal', ['jadwal' => $jadwal]);
        return $pdf->download('Jadwal-PDF');
    }
}
