<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class EspacioSeguro extends Model
{
    use HasFactory; 

    /*public function mentora(): BelongsTo
    {
        return $this->belongsTo(Mentoras::class);

    }
    
    public function alumnas(): HasMany
    {
        return $this->hasMany(Alumnas::class);
    }*/

    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion',
        'fotografia',
    ]; 

    protected $casts = [
        'fotografia' => 'array',
    ];
 }
