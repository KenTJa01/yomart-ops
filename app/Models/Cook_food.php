<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cook_food extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'kode_cook_food',
        'deskripsi',
        'flag',
        'created_by',
        'updated_by',
    ];

    protected $table = 'cook_foods';

}
