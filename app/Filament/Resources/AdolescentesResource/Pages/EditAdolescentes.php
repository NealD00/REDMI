<?php

namespace App\Filament\Resources\AdolescentesResource\Pages;

use App\Filament\Resources\AdolescentesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdolescentes extends EditRecord
{
    protected static string $resource = AdolescentesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
