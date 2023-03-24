<?php

namespace App\Filament\Resources\GeoVehicleResource\Pages;

use App\Filament\Resources\GeoVehicleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeoVehicle extends EditRecord
{
    protected static string $resource = GeoVehicleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
