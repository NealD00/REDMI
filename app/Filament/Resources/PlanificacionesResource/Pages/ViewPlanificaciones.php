<?php

namespace App\Filament\Resources\PlanificacionesResource\Pages;

use App\Filament\Resources\PlanificacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPlanificaciones extends ViewRecord
{
    protected static string $resource = PlanificacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
