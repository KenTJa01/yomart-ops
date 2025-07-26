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
        Schema::create('jenis_biayas', function (Blueprint $table) {

            $table->bigIncrements("id");
            $table->string("kode_jenis_biaya")->unique();
            $table->string("jenis_biaya");
            $table->string("deskripsi");
            $table->integer("flag")->default(1);
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
        Schema::dropIfExists('jenis_biayas');
    }
};
