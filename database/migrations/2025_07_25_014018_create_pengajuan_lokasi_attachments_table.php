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
        Schema::create('pengajuan_lokasi_attachments', function (Blueprint $table) {

            $table->bigIncrements("id");

            $table->bigInteger("id_pengajuan_lokasi");
            $table->foreign("id_pengajuan_lokasi")->references("id")->on("pengajuan_lokasis");

            $table->string('path');

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
        Schema::dropIfExists('pengajuan_lokasi_attachments');
    }
};
