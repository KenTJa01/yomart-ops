<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_lokasis', function (Blueprint $table) {

            $table->bigIncrements("id");
            $table->string('nomor_pengajuan')->unique();

            $table->date('tanggal_pengajuan');
            $table->string('jenis_objek');
            $table->string('bentuk_objek');
            $table->string('sewa_beli');


            $table->string('alamat_lengkap');
            $table->string('rt');
            $table->string('rw');
            $table->string('kode_kota');
            $table->string('kota');
            $table->string('kode_kecamatan');
            $table->string('kecamatan');
            $table->string('kode_kelurahan');
            $table->string('kelurahan');
            $table->string('wilayah');
            $table->bigInteger('perkiraan_biaya_sewa');
            $table->string('periode_sewa');
            $table->string('lokasi');
            $table->float('panjang_bangunan');
            $table->float('lebar_bangunan');
            $table->float('panjang_tanah');
            $table->float('lebar_tanah');
            $table->string('hak_atas_tanah');
            $table->string('pbg');
            $table->string('keterangan_pbg')->nullable();
            $table->string('keterangan')->nullable();

            $table->string('pic');
            $table->string('tlp_pic');

            $table->integer('status_pengajuan');

            $table->timestamps();
            $table->bigInteger("created_by");
            $table->bigInteger("updated_by");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_lokasis');
    }
};
