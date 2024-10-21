<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AsistenciasAdolescentes extends Model
{
    use HasFactory;

    protected $fillable = [
        'actividad',
        'fecha',
        'espacio_seguros_id',
    ];

    public function espacioseguro(): BelongsTo
    {
        return $this->belongsTo(EspacioSeguro::class,'espacio_seguros_id');
    }

    public function adolescentes(): BelongsTo
    {
        return $this->belongsTo(Adolescentes::class,'adolescentes_id');
    }

    public function aintermedios(): HasMany
    {
        return $this->hasMany(aintermedios::class,'asistencias_adolescentes_id','id');
    }
    
}
