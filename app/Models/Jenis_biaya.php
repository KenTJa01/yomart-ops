<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_biaya extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'kode_jenis_biaya',
        'jenis_biaya',
        'deskripsi',
        'flag',
        'created_by',
        'updated_by',
    ];

    protected $table = 'jenis_biayas';

}
