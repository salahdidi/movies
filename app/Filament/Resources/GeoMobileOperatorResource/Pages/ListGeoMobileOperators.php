<?php

namespace App\Filament\Resources\GeoMobileOperatorResource\Pages;

use App\Filament\Resources\GeoMobileOperatorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGeoMobileOperators extends ListRecords
{
    protected static string $resource = GeoMobileOperatorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
