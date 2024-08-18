<?php

namespace App\Filament\Resources\AsistenciaNiniasResource\Pages;

use App\Filament\Resources\AsistenciaNiniasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAsistenciaNinias extends ViewRecord
{
    protected static string $resource = AsistenciaNiniasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
