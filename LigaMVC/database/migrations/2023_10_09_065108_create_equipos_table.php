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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->integer('partidos_jugados')->nullable();
            $table->integer('partidos_ganados')->nullable();
            $table->integer('partidos_empatados')->nullable();
            $table->integer('partidos_perdidos')->nullable();
            $table->integer('puntos')->nullable();
            $table->integer('goles_realizados')->nullable();
            $table->integer('goles_recibidos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
