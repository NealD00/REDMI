<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AsistenciaNinias extends Model
{
    use HasFactory;

    protected $fillable = [
        'actividad',
        'fecha',
        'espacio_seguros_id',
        'ninias_id',
    ];

    public function espacioseguro(): BelongsTo
    {
        return $this->belongsTo(EspacioSeguro::class,'espacio_seguros_id');
    }

    public function ninias(): BelongsTo
    {
        return $this->belongsTo(Ninias::class,'ninias_id');
    }

    /*public function getNombreCompletoAttribute() {
        return "{$this->primer_nombre} {$this->primer_apellido}";
    }*/
}
