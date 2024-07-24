<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\EspacioSeguro;
use App\Models\Ninias;
use App\Models\Adolescentes;
use App\Models\Mentoras;

class EspaciosSeguros extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Espacios Seguros', EspacioSeguro::query()->count())
                ->icon('heroicon-o-building-storefront')
                ->description('Momostenango')
                #->descriptionIcon('heroicon-o-information-circle')
                ->chart([7,2,10,3,15,4,20])
                ->color('success'),
            Stat::make('Mentoras', Mentoras::query()->count())
                ->icon('heroicon-o-identification')
                ->description('Niñas y Adolescentes')
                #->descriptionIcon('heroicon-o-information-circle')
                ->chart([7,2,10,3,15,4,20])
                ->color('success'),
            Stat::make('Adolescentes', Adolescentes::query()->count())
                ->icon('heroicon-o-user')
                ->description('Rango: 12 a 17 años')
                #->descriptionIcon('heroicon-o-information-circle')
                ->chart([7,2,10,3,15,4,20])
                ->color('success'),
            Stat::make('Niñas', Ninias::query()->count())
                ->icon('heroicon-o-users')
                ->description('Rango: 6 a 11 años')
                #->descriptionIcon('heroicon-o-information-circle')
                ->chart([7,2,10,3,15,4,20])
                ->color('success'),

        ];
    }
}
