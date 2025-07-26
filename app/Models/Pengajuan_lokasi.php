<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_lokasi extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    public $increment = true;

    protected $fillable = [
        'nomor_pengajuan',
        'tanggal_pengajuan',
        'jenis_objek',
        'bentuk_objek',
        'sewa_beli',
        'alamat_lengkap',
        'rt',
        'rw',
        'kode_kota',
        'kota',
        'kode_kecamatan',
        'kecamatan',
        'kode_kelurahan',
        'kelurahan',
        'wilayah',
        'perkiraan_biaya_sewa',
        'periode_sewa',
        'lokasi',
        'panjang_bangunan',
        'lebar_bangunan',
        'panjang_tanah',
        'lebar_tanah',
        'hak_atas_tanah',
        'pbg',
        'keterangan_pbg',
        'keterangan',
        'pic',
        'tlp_pic',
        'status_pengajuan',
        'created_by',
        'updated_by',
    ];

    protected $table = 'pengajuan_lokasis';

}
