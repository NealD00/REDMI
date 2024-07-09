<?php

namespace App\Filament\Resources\NiniasResource\Pages;

use App\Filament\Resources\NiniasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNinias extends ListRecords
{
    protected static string $resource = NiniasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
