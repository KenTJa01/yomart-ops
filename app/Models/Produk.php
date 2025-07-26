<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'deskripsi',
        'flag',
        'created_by',
        'updated_by',
    ];

    protected $table = 'produks';

}
