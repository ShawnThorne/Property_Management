<?php

namespace App\Filament\Resources\PropertyRoomResource\Pages;

use App\Filament\Resources\PropertyRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropertyRoom extends EditRecord
{
    protected static string $resource = PropertyRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
