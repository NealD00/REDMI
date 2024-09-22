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
        Schema::create('aintermedios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asistencias_adolescentes_id')->constrained('asistencias_adolescentes')->cascadeOnDelete();
            $table->foreignId('adolescentes_id')->constrained('adolescentes')->cascadeOnDelete();
            $table->boolean('asistio')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aintermedios');
    }
};
