<?php

namespace App\Filament\Resources\GruzResource\Pages;

use App\Filament\Resources\GruzResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGruz extends EditRecord
{
    protected static string $resource = GruzResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
