<?php

namespace App\Filament\Resources\GeoMobileOperatorResource\Pages;

use App\Filament\Resources\GeoMobileOperatorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeoMobileOperator extends EditRecord
{
    protected static string $resource = GeoMobileOperatorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
