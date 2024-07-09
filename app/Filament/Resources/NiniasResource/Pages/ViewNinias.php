<?php

namespace App\Filament\Resources\NiniasResource\Pages;

use App\Filament\Resources\NiniasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewNinias extends ViewRecord
{
    protected static string $resource = NiniasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
