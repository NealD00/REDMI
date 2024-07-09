<?php

namespace App\Filament\Resources\MentorasResource\Pages;

use App\Filament\Resources\MentorasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMentoras extends EditRecord
{
    protected static string $resource = MentorasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
