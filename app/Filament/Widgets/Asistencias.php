<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Ninias;

class Asistencias extends BaseWidget
{

    protected static ?string $heading = 'Control de Asistencias Niñas';
    protected static ?int $sort=6;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Ninias::query()
            )
            ->columns([
                // ...
            ]);
    }
}
