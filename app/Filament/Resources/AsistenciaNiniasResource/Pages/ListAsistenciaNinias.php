<?php

namespace App\Filament\Resources\AsistenciaNiniasResource\Pages;

use App\Filament\Resources\AsistenciaNiniasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsistenciaNinias extends ListRecords
{
    protected static string $resource = AsistenciaNiniasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
