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
        Schema::create('pilotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('telefono', 13);
            $table->string('dpi', 13);
            $table->string('sexo', 50);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('sede_id')->index('fk_pilotos_piloto_sedes_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilotos');
    }
};
