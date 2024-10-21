<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

use App\Models\Ninias;
use Filament\Tables\Columns\TextColumn;

class Nparticipantes extends BaseWidget
{
    protected static ?string $heading = 'Participantes Niñas por Comunidad';
    protected static ?int $sort=4;

    public function table(Table $table): Table
    {
        return $table
        ->query(
            Ninias::query()
            ->selectRaw('MIN(espacio_seguros.id) as id, espacio_seguros.nombre, COUNT(*) as total_participantes')
            ->join('espacio_seguros', 'ninias.espacio_seguros_id', '=', 'espacio_seguros.id')
            ->groupBy('espacio_seguros.nombre')
        )
        ->columns([
            TextColumn::make('nombre')->label('Espacio Seguro')
             ->icon('heroicon-o-building-storefront'),
            TextColumn::make('total_participantes')->label('Número de Participantes')
            ->aligncenter(),
        ]);
    }
}
