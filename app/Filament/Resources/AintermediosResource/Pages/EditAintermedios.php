<?php

namespace App\Filament\Resources\AintermediosResource\Pages;

use App\Filament\Resources\AintermediosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAintermedios extends EditRecord
{
    protected static string $resource = AintermediosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
