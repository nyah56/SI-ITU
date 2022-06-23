<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_pemesanan';
    protected $primaryKey = 'id_pesan';
    protected $fillable = [
        'id_pesan',
        'id_konsumen',
        'id_produk',
        'jumlah',
        'alamat',
    ];
    public $incrementing = false;
    public $timestamps = false;
    /**
     * Get the dataProduk that owns the Pemesanan
     *
     **/
    public function dataProduk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
    /**
     * Get the user  owns the Pemesanan
     *
     *
     */
    public function dataKonsumen()
    {
        return $this->belongsTo(Konsumen::class, 'id_konsumen');
    }
}
