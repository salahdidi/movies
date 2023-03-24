<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeoMobileSimResource\Pages;
use App\Filament\Resources\GeoMobileSimResource\RelationManagers;
use App\Models\GeoMobileSim;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeoMobileSimResource extends Resource
{
    protected static ?string $model = GeoMobileSim::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('serial_number')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('numero_telephone')->searchable(),
                Tables\Columns\TextColumn::make('geoMobileOperator.operator_designation')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('numero_compte')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('date_1ere_activation')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('geoTracker.imei')->searchable()->sortable(),
                IconColumn::make('current_status')
                ->boolean()
                ->trueIcon('heroicon-o-badge-check')
                ->falseIcon('heroicon-o-x-circle'),
                
                Tables\Columns\TextColumn::make('current_status_from_date')->searchable()->sortable(),
              
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGeoMobileSims::route('/'),
            'create' => Pages\CreateGeoMobileSim::route('/create'),
            'edit' => Pages\EditGeoMobileSim::route('/{record}/edit'),
        ];
    }    
}
