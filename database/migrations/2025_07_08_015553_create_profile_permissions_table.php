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
        Schema::create('profile_permissions', function (Blueprint $table) {

            $table->bigIncrements("id");
            $table->bigInteger("profile_id");
            $table->foreign("profile_id")->references("id")->on("profiles");
            $table->bigInteger("permission_id");
            $table->foreign("permission_id")->references("id")->on("permissions");
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
        Schema::dropIfExists('profile_permissions');
    }
};
