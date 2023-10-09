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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('equipo_local')->nullable(false);
            $table->unsignedBigInteger('equipo_visitante')->nullable(false);
            $table->integer('goles_local')->nullable(false);
            $table->integer('goles_visitante')->nullable(false);
            $table->foreign('equipo_local')
                ->references('id')
                ->on('equipos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('equipo_visitante')
                ->references('id')
                ->on('equipos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
