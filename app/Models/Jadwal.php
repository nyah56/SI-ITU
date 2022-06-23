<?php

namespace App\Models;

use App\Models\Konsumen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'tb_jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = [
        'id_jadwal',
        'id_pesan',
        'id_konsumen',
        'id_produk',
        'kirim_hari',
        'jumlah',
        'alamat',
    ];
    public $incrementing = false;
    public $timestamps = false;
/**
 * Get the user that owns the Jadwal
 *

 */
    public function dataKonsumen()
    {
        return $this->belongsTo(Konsumen::class, 'id_konsumen');
    }
    public function dataProduk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
