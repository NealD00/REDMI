<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class aintermedios extends Model
{
    use HasFactory;

    protected $fillable = [
        'asistencias_adolescentes_id',
        'adolescentes_id',
        'asistio',
    ];

    protected $casts = [
        'asistio' => 'boolean',
    ];

    public function asistencias_adolescentes():BelongsTo
    {
        return $this->belongsTo(AsistenciasAdolescentes::class,'asistencias_adolescentes_id');
    }

    public function adolescentes():BelongsTo
    {
        return $this->belongsTo(Adolescentes::class,'adolescentes_id');
    }

   /* public function storeAsistencia($asistencias_adolescentes_id)
{
    // Obtener la asistencia seleccionada
    $asistencia = AsistenciasAdolescentes::find($asistencias_adolescentes_id);
    
    // Obtener el espacio seguro asociado a la asistencia
    $espacioSeguroId = $asistencia->espacio_seguros_id;

    // Filtrar adolescentes que pertenezcan a ese espacio seguro
    $adolescentes = Adolescentes::where('espacio_seguros_id', $espacioSeguroId)->get();

    // Crear registros en la tabla aintermedios para cada adolescente
    foreach ($adolescentes as $adolescente) {
        Aintermedios::create([
            'asistencias_adolescentes_id' => $asistencias_adolescentes_id,
            'adolescentes_id' => $adolescente->id,
            'asistio' => false, // Valor inicial, puede ser ajustado según lo requieras
        ]);
    }
}*/

/*$espacioSeguroId = 1; // El ID del espacio seguro específico

$asistencias = EspacioSeguro::with(['asistenciasAdolescentes.adolescente'])
                ->find($espacioSeguroId)
                ->asistenciasAdolescentes;

foreach ($asistencias as $asistencia) {
    echo "Asistencia ID: " . $asistencia->id . ", Adolescente: " . $asistencia->adolescente->nombre . "\n";
}*/

}
