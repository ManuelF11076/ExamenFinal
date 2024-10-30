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
        Schema::table('pilotos', function (Blueprint $table) {
            $table->foreign(['piloto_id'], 'fk_pilotos_piloto_sedes')->references(['id'])->on('piloto_sedes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pilotos', function (Blueprint $table) {
            $table->dropForeign('fk_pilotos_piloto_sedes');
        });
    }
};
