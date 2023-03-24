<?php

namespace App\Filament\Resources\GeoMobileSimResource\Pages;

use App\Filament\Resources\GeoMobileSimResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGeoMobileSims extends ListRecords
{
    protected static string $resource = GeoMobileSimResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
