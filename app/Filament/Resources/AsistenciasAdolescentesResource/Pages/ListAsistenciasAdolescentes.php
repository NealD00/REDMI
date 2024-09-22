<?php

namespace App\Filament\Resources\AsistenciasAdolescentesResource\Pages;

use App\Filament\Resources\AsistenciasAdolescentesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsistenciasAdolescentes extends ListRecords
{
    protected static string $resource = AsistenciasAdolescentesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
