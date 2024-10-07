<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class nintermedios extends Model
{
    use HasFactory;

    protected $fillable = [
        'asistencia_ninias_id',
        'ninias_id',
        'asistio',
    ];

    protected $casts = [
        'asistio' => 'boolean',
    ];

    public function asistencia_ninias():BelongsTo
    {
        return $this->belongsTo(AsistenciaNinias::class,'asistencia_ninias_id');
    }

    public function ninias():BelongsTo
    {
        return $this->belongsTo(Ninias::class,'ninias_id');
    }
}
