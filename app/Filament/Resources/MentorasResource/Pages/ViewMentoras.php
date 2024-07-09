<?php

namespace App\Filament\Resources\MentorasResource\Pages;

use App\Filament\Resources\MentorasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMentoras extends ViewRecord
{
    protected static string $resource = MentorasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
