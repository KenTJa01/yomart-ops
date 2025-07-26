<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_permission extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'profile_id',
        'permission_id',
        'created_by',
        'updated_by',
    ];

    protected $table = 'profile_permissions';

}
