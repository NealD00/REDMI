<?php

namespace App\Filament\Resources\PlanificacionesResource\Pages;

use App\Filament\Resources\PlanificacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlanificaciones extends ListRecords
{
    protected static string $resource = PlanificacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
