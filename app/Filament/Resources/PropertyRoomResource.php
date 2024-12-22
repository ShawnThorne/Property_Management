<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyRoomResource\Pages;
use App\Filament\Resources\PropertyRoomResource\RelationManagers;
use App\Models\PropertyRoom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropertyRoomResource extends Resource
{
    protected static ?string $model = PropertyRoom::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('room_designation')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('num_of_occupants')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('property_id')
                    ->relationship('property', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('room_designation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('num_of_occupants')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('property.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPropertyRooms::route('/'),
            'create' => Pages\CreatePropertyRoom::route('/create'),
            'edit' => Pages\EditPropertyRoom::route('/{record}/edit'),
        ];
    }
}
