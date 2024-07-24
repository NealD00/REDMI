<?php

namespace App\Filament\Resources\PlanificacionesResource\Pages;

use App\Filament\Resources\PlanificacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlanificaciones extends EditRecord
{
    protected static string $resource = PlanificacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
