<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fashion extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'kode_fashion',
        'deskripsi',
        'flag',
        'created_by',
        'updated_by',
    ];

    protected $table = 'fashions';

}
