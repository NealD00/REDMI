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
}
