<?php

namespace App\Filament\Resources\AdolescentesResource\Pages;

use App\Filament\Resources\AdolescentesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdolescentes extends ListRecords
{
    protected static string $resource = AdolescentesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
