<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'profile_name',
        'tipe_profile',
        'description',
        'flag',
        'created_by',
        'updated_by',
    ];

    protected $table = 'profiles';

}
