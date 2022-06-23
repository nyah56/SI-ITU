<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    use HasFactory;
    protected $table = 'tb_petani';
    protected $primaryKey = 'id_petani';
    public $incrementing = false;
    protected $fillable = ['id_petani', 'nama_petani', 'contact', 'alamat'];
    public $timestamps = false;
}
