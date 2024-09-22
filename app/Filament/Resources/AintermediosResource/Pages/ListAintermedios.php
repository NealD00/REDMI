<?php

namespace App\Filament\Resources\AintermediosResource\Pages;

use App\Filament\Resources\AintermediosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAintermedios extends ListRecords
{
    protected static string $resource = AintermediosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
