<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Ninias;
use App\Modesl\AsistenciaNinias;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class nAsistencias extends BaseWidget
{
    protected static ?string $heading = 'Control de Asistencias de Niñas';
    protected static ?int $sort=2;
    
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Ninias::query()
                ->withCount([
                    'asistencianinias as total_asistencias', // Contar todas las asistencias
                    'asistencianinias as total_participaciones' => function ($query) {
                        $query->where('nintermedios.asistio', true);
                        //$query->wherePivot('asistio', true); // Contar asistencias donde asistio
                    },
                ]) 
            )
            ->columns([
                TextColumn::make('espacioseguro.nombre')
                    ->label('Espacio Seguro')
                    /*->icon('heroicon-o-building-storefront')*/,
                TextColumn::make('nombre_completo')
                ->label('Nombre'),
                TextColumn::make('total_participaciones')
                    ->label('Participo')
                    ->sortable(),
                TextColumn::make('total_asistencias')
                    ->label('Total')
                    ->sortable(),
            ])
            
            ->filters([
                SelectFilter::make('espacioseguro_id')
                    ->label('Filtrar por comunidad')
                    ->relationship('espacioseguro', 'nombre')
                    ->preload()
                    ->indicator('Espacios Seguros')
                    ->searchable(),
            ]);
    }
}
