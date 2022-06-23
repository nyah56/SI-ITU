<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persediaan extends Model
{
    use HasFactory;
    protected $table = 'tb_persediaan';
    protected $primaryKey = 'id_persediaan';
    protected $fillable = ['id_persediaan', 'id_produk', 'id_petani', 'masa_kadaluarsa', 'jumlah'];
    public $incrementing = false;
    public $timestamps = false;
//
    public function dataProduk()
    {
        return $this->belongsTo(Produk::class, 'id_produk')->withDefault([
            'id_produk' => 'tidak ada',
        ]);
    }
    public function dataPetani()
    {
        return $this->belongsTo(Petani::class, 'id_petani')->withDefault([
            'id_petani' => 'tidak ada',
        ]);
    }

}
