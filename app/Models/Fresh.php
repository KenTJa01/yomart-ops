<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fresh extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'kode_fresh',
        'deskripsi',
        'flag',
        'created_by',
        'updated_by',
    ];

    protected $table = 'freshes';

}
