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
        Schema::create('mentoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->foreignId('espacio_seguros_id')->constrained('espacio_seguros')->cascadeOnDelete();
            $table->foreignId('espacio_seguros_id_2')->nullable()->constrained('espacio_seguros');
            $table->string('grupo');
            $table->date('fechaNacimiento');
            $table->integer('edad')->nullable();
            $table->string('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentoras');
        Schema::table('mentoras', function (Blueprint $table) {
            $table->dropForeign(['espacio_seguros_id_2']);
            $table->dropColumn('espacio_seguros_id_2');
        });

    }
};
