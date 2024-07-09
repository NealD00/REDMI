<?php

namespace App\Filament\Resources\EspacioSeguroResource\Pages;

use App\Filament\Resources\EspacioSeguroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEspacioSeguros extends ListRecords
{
    protected static string $resource = EspacioSeguroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
