<?php

namespace App\Filament\Resources\AsistenciasAdolescentesResource\Pages;

use App\Filament\Resources\AsistenciasAdolescentesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsistenciasAdolescentes extends EditRecord
{
    protected static string $resource = AsistenciasAdolescentesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
