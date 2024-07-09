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
        Schema::create('ninias', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre');
            $table->string('segundo_nombre') ->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->date('fecha_nacimiento');
            $table->integer('edad')->nullable();
            $table->string('grado_escolar');
            #$table->string('telefono');
            $table->string('nombre_encargado');
            $table->string('telefono_encargado');
            $table->string('fecha_inscripcion');
            #$table->string('rango');
            $table->foreignId('mentoras_id')->constrained('mentoras')->cascadeOnDelete();
            $table->foreignId('espacio_seguros_id')->constrained('espacio_seguros')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ninias');
    }
};
