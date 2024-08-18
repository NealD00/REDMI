<?php

namespace App\Filament\Resources\AsistenciaNiniasResource\Pages;

use App\Filament\Resources\AsistenciaNiniasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsistenciaNinias extends EditRecord
{
    protected static string $resource = AsistenciaNiniasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
