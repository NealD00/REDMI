<?php

namespace App\Filament\Resources\NiniasResource\Pages;

use App\Filament\Resources\NiniasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNinias extends EditRecord
{
    protected static string $resource = NiniasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
