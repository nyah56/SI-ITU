<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;
    protected $table = 'tb_konsumen';
    protected $primaryKey = 'id_konsumen';
    public $incrementing = false;
    protected $fillable = ['id_konsumen', 'nama_konsumen', 'contact', 'alamat'];
    public $timestamps = false;
}
