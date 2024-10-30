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
        Schema::create('piloto_viajes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('observacion')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('direccion_id')->index('fk_piloto_viajes_direcciones1_idx');
            $table->unsignedInteger('piloto_id')->index('fk_piloto_viajes_pilotos1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piloto_viajes');
    }
};
