<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

use App\Models\Ninias;
use Filament\Tables\Columns\TextColumn;

class Nparticipantes extends BaseWidget
{
    protected static ?int $sort=2;

    public function table(Table $table): Table
    {
        return $table
            ->query(Ninias::query())
            ->columns([
                TextColumn::make("nombre_completo"),
                TextColumn::make("fechaNacimiento"),
            ]);
    }
}
