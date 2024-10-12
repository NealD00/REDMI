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
        Schema::table('comentarios', function (Blueprint $table) {
            // Eliminar la columna mentoras_id
            $table->dropForeign(['mentoras_id']); // Elimina la restricción de clave foránea
            $table->dropColumn('mentoras_id');    // Elimina la columna

            // Agregar la columna usuario_id con clave foránea
            $table->foreignId('user_id')->after('id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comentarios', function (Blueprint $table) {
            // Revertir la eliminación de mentoras_id
            $table->foreignId('mentoras_id')->after('id')->constrained('mentoras');

            // Eliminar la columna usuario_id
            $table->dropForeign(['usuario_id']); // Elimina la restricción de clave foránea
            $table->dropColumn('usuario_id');    // Elimina la columna
        });
    }
};
