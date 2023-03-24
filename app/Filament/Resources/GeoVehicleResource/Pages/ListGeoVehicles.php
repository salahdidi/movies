<?php

namespace App\Filament\Resources\GeoVehicleResource\Pages;

use App\Filament\Resources\GeoVehicleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGeoVehicles extends ListRecords
{
    protected static string $resource = GeoVehicleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
