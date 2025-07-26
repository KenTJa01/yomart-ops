<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_lokasi_attachment extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'id_pengajuan_lokasi',
        'path',
        'created_by',
        'updated_by',
    ];

    protected $table = 'pengajuan_lokasi_attachments';

}
