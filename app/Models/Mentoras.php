<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;


class Mentoras extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'grupo',
        'correo',
        'espacio_seguros_id',
        'espacio_seguros_id_2', 
        'edad',
        'fechaNacimiento',
        'telefono',
    ];

    public function espacioseguro(): BelongsTo
    {
        return $this->belongsTo(EspacioSeguro::class,'espacio_seguros_id');
    }

    public function espacioseguro2()
    {
        return $this->belongsTo(EspacioSeguro::class, 'espacio_seguros_id_2');
    }
    
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->edad = Carbon::parse($model->fechaNacimiento)->age;
        });
    }
    /*
    public function alumnas(): HasMany
    {
        return $this->hasMany(Alumnas::class);
    }*/
}
