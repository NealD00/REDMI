<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ninias extends Model
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
        'tercer_nombre',
        'primer_apellido',
        'segundo_apellido',
        'fecha_nacimiento',
        'edad',
        'grado_escolar',
        #'telefono',
        'nombre_encargado',
        'telefono_encargado',
        'fecha_inscripcion',
        'mentoras_id',
        'espacio_seguros_id',
        'nombre_completo'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            //calculo de la edad a partir de la fecha de nacimiento
            $model->edad = Carbon::parse($model->fecha_nacimiento)->age;

            //concatenacion de nombre y apellido para obtener nombre completo
            $model->nombre_completo = $model->primer_nombre . ' ' . $model->primer_apellido;
        });

    } 


}
