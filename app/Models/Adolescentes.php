<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Adolescentes extends Model
{
    use HasFactory;

    public function mentoras(): BelongsTo
    {
        return $this->belongsTo(Mentoras::class,'mentoras_id');
    }

    public function espacioseguro(): BelongsTo
    {
        return $this->belongsTo(EspacioSeguro::class,'espacio_seguros_id');
    }

    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'fecha_nacimiento',
        'edad',
        'grado_escolar',
        'telefono',
        'nombre_encargado',
        'telefono_encargado',
        'fecha_inscripcion',
        'mentoras_id',
        'espacio_seguros_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->edad = Carbon::parse($model->fecha_nacimiento)->age;
        });
    } 
}
