<?php

namespace App\Filament\Resources\GeoMobileSimTrackerResource\Pages;

use App\Filament\Resources\GeoMobileSimTrackerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeoMobileSimTracker extends EditRecord
{
    protected static string $resource = GeoMobileSimTrackerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
