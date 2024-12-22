<?php

namespace App\Filament\Resources\PropertyRoomResource\Pages;

use App\Filament\Resources\PropertyRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPropertyRooms extends ListRecords
{
    protected static string $resource = PropertyRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
