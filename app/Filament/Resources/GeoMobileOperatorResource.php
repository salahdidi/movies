<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeoMobileOperatorResource\Pages;
use App\Filament\Resources\GeoMobileOperatorResource\RelationManagers;
use App\Models\GeoMobileOperator;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeoMobileOperatorResource extends Resource
{
    protected static ?string $model = GeoMobileOperator::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("operator_designation")->label("opérateur")->autofocus()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('operator_designation')->searchable()->sortable()
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
            'index' => Pages\ListGeoMobileOperators::route('/'),
            'create' => Pages\CreateGeoMobileOperator::route('/create'),
            'edit' => Pages\EditGeoMobileOperator::route('/{record}/edit'),
        ];
    }    
}
