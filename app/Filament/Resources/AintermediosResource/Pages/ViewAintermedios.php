<?php

namespace App\Filament\Resources\AintermediosResource\Pages;

use App\Filament\Resources\AintermediosResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAintermedios extends ViewRecord
{
    protected static string $resource = AintermediosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
