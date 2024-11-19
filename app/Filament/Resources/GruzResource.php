<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GruzResource\Pages;
use App\Filament\Resources\GruzResource\RelationManagers;
use App\Models\Gruz;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GruzResource extends Resource
{
    protected static ?string $model = Gruz::class;

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
                Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('marka')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('brand')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('god')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('engine')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('vin_number')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('country')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('probeg')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('color')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('price')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListGruzs::route('/'),
            'create' => Pages\CreateGruz::route('/create'),
            'edit' => Pages\EditGruz::route('/{record}/edit'),
        ];
    }
}
