<?php

namespace App\Filament\Resources\MentorasResource\Pages;

use App\Filament\Resources\MentorasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMentoras extends ListRecords
{
    protected static string $resource = MentorasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
