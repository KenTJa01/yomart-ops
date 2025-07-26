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
        Schema::create('fashions', function (Blueprint $table) {

            $table->bigIncrements("id");
            $table->string("kode_fashion")->unique();
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
        Schema::dropIfExists('fashions');
    }
};
