<?php

namespace App\Filament\Resources\AsistenciasAdolescentesResource\Pages;

use App\Filament\Resources\AsistenciasAdolescentesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAsistenciasAdolescentes extends ViewRecord
{
    protected static string $resource = AsistenciasAdolescentesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
