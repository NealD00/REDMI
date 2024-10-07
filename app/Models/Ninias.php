<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;
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

    /*protected static function booted()
    {
        static::saving(function ($ninia) {
            $fechaNacimiento = Carbon::parse($ninia->fecha_nacimiento);
            $edad = $fechaNacimiento->age;

            if ($edad < 6 || $edad > 12) {
                // Lanza una excepción si la edad no está en el rango de 6 - 12  años
                throw new ModelNotFoundException('La edad debe estar entre 6 y 12 años.');
            }
        });
    }*/

    
    protected static function booted()
    {
        static::saving(function ($ninia) {
            $fechaNacimiento = Carbon::parse($ninia->fecha_nacimiento);
            $edad = $fechaNacimiento->age;

            if ($edad < 6 || $edad > 12) {
                // Mostrar una notificación en pantalla
                Notification::make()
                    ->title('Edad inválida')
                    ->body('La edad debe estar entre 6 y 12 años.')
                    ->danger()  // Estilo de notificación de error
                    ->send();

                // Lanzar una excepción de validación para el campo de edad
                throw ValidationException::withMessages([
                    'fecha_nacimiento' => 'La edad debe estar entre 6 y 12 años.',
                ]);
            }
        });
    }

}


