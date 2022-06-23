<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Models\Pemesanan;
use App\Models\Persediaan;
use App\Models\Produk;

class DashboardController extends Controller
{
    //
    public function index()
    {$konsumen = Konsumen::count();
        $persediaan = Persediaan::count();
        $pesan = Pemesanan::count();
        $produk = Produk::count();
        return view('dashboard', [
            "title" => "dashboard",
            "produk" => $produk,
            "pesan" => $pesan,
            "persediaan" => $persediaan,
            "konsumen" => $konsumen,
        ]);
    }
}
