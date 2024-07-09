<?php

namespace App\Filament\Resources\AdolescentesResource\Pages;

use App\Filament\Resources\AdolescentesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAdolescentes extends ViewRecord
{
    protected static string $resource = AdolescentesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
