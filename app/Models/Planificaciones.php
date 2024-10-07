<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
#use Spatie\Tags\HasTags;

class Planificaciones extends Model
{
    use HasFactory;
    #use HasTags;

    protected $fillable = [
        'mentoras_id',
        'imagen',
        'titulo',
        'descripcion',
        'estado',
        'fecha',
        'etiqueta'
    ];
    
    public function mentoras(): BelongsTo
    {
        return $this->belongsTo(Mentoras::class,'mentoras_id');
    }

    public function espacioseguro(): BelongsTo
    {
        return $this->belongsTo(EspacioSeguro::class,'espacio_seguros_id');
    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(comentarios::class,'planificaciones_id','id');
    }


    protected $casts = [
        'imagen' => 'array',
    ];
}
