<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Adolescentes;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
//use Filament\Tables\Filters\DateRangeFilter;


class Asistencias extends BaseWidget
{

    protected static ?string $heading = 'Control de Asistencias de Adolescentes';
    protected static ?int $sort=3;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                //Adolescentes::query()
                Adolescentes::query()
                ->withCount([
                    'asistenciasadolescentes as total_asistencias', // Contar todas las asistencias
                    'asistenciasadolescentes as total_participaciones' => function ($query) {
                        $query->where('aintermedios.asistio', true);
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
                /*DateRangeFilter::make('fecha')
                    ->label('Rango de Fechas')
                    ->placeholder('Selecciona un rango de fechas')
                    ->column('asienciasadolescentes.fecha'),*/
            ]);
    }
}

