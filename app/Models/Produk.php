<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tb_produk';
    protected $primaryKey = 'id_produk';
    public $incrementing = false;
    protected $fillable = ['id_produk', 'nama_produk'];
    public $timestamps = false;
}
