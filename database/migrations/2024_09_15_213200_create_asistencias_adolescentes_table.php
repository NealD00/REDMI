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
        Schema::create('asistencias_adolescentes', function (Blueprint $table) {
            $table->id();
            $table->string('actividad');
            $table->date('fecha');
            $table->foreignId('espacio_seguros_id')->constrained('espacio_seguros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias_adolescentes');
    }
};
