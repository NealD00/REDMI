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
        Schema::create('nintermedios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asistencia_ninias_id')->constrained('asistencia_ninias');
            $table->foreignId('ninias_id')->constrained('ninias');
            $table->boolean('asistio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nintermedios');
    }
};
