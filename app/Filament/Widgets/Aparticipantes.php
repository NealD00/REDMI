<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

use App\Models\Adolescentes;
use App\Models\EspacioSeguro;
use Filament\Tables\Columns\TextColumn;

class Aparticipantes extends BaseWidget
{
    protected static ?string $heading = 'Participantes Adolescentes por Comunidad';
    protected static ?int $sort=3;

    public function table(Table $table): Table
    {
        return $table
            /*->query(
                Adolescentes::query()
                ->selectRaw('espacioseguro.nombre, COUNT(*) as total_participantes')
                ->join('espacio_seguros', 'adolescentes.espacioseguro_id', '=', 'espacio_seguros.id')
                ->groupBy('espacioseguro.nombre')
            )
            ->columns([
                TextColumn::make('espacioseguro.nombre')->label('Espacio Seguro'),
                TextColumn::make('total_participantes')->label('Número de Participantes'),
            ]);*/
            ->query(
                Adolescentes::query()
                /*->selectRaw('espacio_seguros.nombre, COUNT(*) as total_participantes')
                ->join('espacio_seguros', 'adolescentes.espacio_seguros_id', '=', 'espacio_seguros.id')
                ->groupBy('espacio_seguros.nombre')*/
            )
            ->columns([
                TextColumn::make('nombre')->label('Espacio Seguro'),
                TextColumn::make('total_participantes')->label('Número de Participantes'),
            ]);
    }
}
