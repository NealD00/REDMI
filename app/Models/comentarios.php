<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class comentarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'planificaciones_id',
        'comentario',
        'mentora_id',/*
        'comentable_id',
        'comentable_type',*/
    ];

    public function planificaciones():BelongsTo
    {
        return $this->belongsTo(Planificaciones::class,'planificaciones_id');
    }
}
