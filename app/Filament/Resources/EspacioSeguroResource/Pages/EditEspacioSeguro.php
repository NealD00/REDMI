<?php

namespace App\Filament\Resources\EspacioSeguroResource\Pages;

use App\Filament\Resources\EspacioSeguroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEspacioSeguro extends EditRecord
{
    protected static string $resource = EspacioSeguroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
