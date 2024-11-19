<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarsResource\Pages;
use App\Filament\Resources\CarsResource\RelationManagers;
use App\Models\Cars;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarsResource extends Resource
{
    protected static ?string $model = Cars::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('marka')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('brand')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('god')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('engine')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('vin_number')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('country')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('probeg')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('color')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('price')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')->sortable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('marka')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('brand')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('god')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('engine')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('vin_number')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('country')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('probeg')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('color')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('price')->sortable()->searchable()->color('text-blue-500'),
            Tables\Columns\TextColumn::make('')->sortable()->searchable()->color('text-blue-500'),

        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCars::route('/create'),
            'edit' => Pages\EditCars::route('/{record}/edit'),
        ];
    }
}
