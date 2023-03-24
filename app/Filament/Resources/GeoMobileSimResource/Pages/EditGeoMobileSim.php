<?php

namespace App\Filament\Resources\GeoMobileSimResource\Pages;

use App\Filament\Resources\GeoMobileSimResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeoMobileSim extends EditRecord
{
    protected static string $resource = GeoMobileSimResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
