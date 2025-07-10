<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'nama',
        'no_telp',
        'no_rekening',
        'pemilik_rekening',
        'bank',
        'nama_perusahaan',
        'flag',
        'created_by',
        'updated_by',
    ];

    protected $table = 'vendors';

}
