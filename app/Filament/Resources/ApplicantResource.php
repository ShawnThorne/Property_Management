<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicantResource\Pages;
use App\Models\Applicant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ApplicantResource extends Resource
{
    protected static ?string $model = Applicant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('organization_id')
                    ->relationship('organization', 'name')
                    ->required(),
                Forms\Components\DateTimePicker::make('desired_move_in')
                    ->required(),
                Forms\Components\Toggle::make('applying_as_group')
                    ->required(),
                Forms\Components\Textarea::make('group_names')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('discovery_method')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('full_legal_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('date_of_birth')
                    ->required(),
                Forms\Components\TextInput::make('current_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cell_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parents_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('parents_phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('school')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('ever_been_evicted')
                    ->required(),
                Forms\Components\Toggle::make('willfully_intentionally_refused_rent')
                    ->required(),
                Forms\Components\Toggle::make('caused_more_$150_property_damage')
                    ->required(),
                Forms\Components\Toggle::make('convicted_of_felony_misdemeanor')
                    ->required(),
                Forms\Components\Toggle::make('credit_problems_previous_2_years')
                    ->required(),
                Forms\Components\Toggle::make('under_18')
                    ->required(),
                Forms\Components\Toggle::make('military_enlistment')
                    ->required(),
                Forms\Components\Toggle::make('bringing_pets')
                    ->required(),
                Forms\Components\Textarea::make('if_yes_any_explain')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('driver_license_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('driver_license_state')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('owns_vehicle')
                    ->required(),
                Forms\Components\TextInput::make('vehicle_make')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('vehicle_year')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('vehicle_license_plate')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('vehicle_license_state')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('has_bicycle')
                    ->required(),
                Forms\Components\Toggle::make('has_boat')
                    ->required(),
                Forms\Components\Toggle::make('has_motorcycle')
                    ->required(),
                Forms\Components\Toggle::make('has_camper')
                    ->required(),
                Forms\Components\Toggle::make('is_employed')
                    ->required(),
                Forms\Components\TextInput::make('current_employer')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('employer_phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('employer_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('current_monthly_salary')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('employer_supervisor')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('employer_length_of_employment')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('if_not_employed_who_provides_living_expenses')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('provider_phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('provider_email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('provider_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('previous_rental_1_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('previous_rental_1_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('previous_rental_1_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('previous_rental_1_start_date')
                    ->required(),
                Forms\Components\DateTimePicker::make('previous_rental_1_end_date')
                    ->required(),
                Forms\Components\TextInput::make('previous_rental_2_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('previous_rental_2_phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('previous_rental_2_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DateTimePicker::make('previous_rental_2_start_date'),
                Forms\Components\DateTimePicker::make('previous_rental_2_end_date'),
                Forms\Components\TextInput::make('previous_rental_3_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('previous_rental_3_phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('previous_rental_3_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DateTimePicker::make('previous_rental_3_start_date'),
                Forms\Components\DateTimePicker::make('previous_rental_3_end_date'),
                Forms\Components\TextInput::make('previous_rental_4_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('previous_rental_4_phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('previous_rental_4_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DateTimePicker::make('previous_rental_4_start_date'),
                Forms\Components\DateTimePicker::make('previous_rental_4_end_date'),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('organization.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desired_move_in')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('applying_as_group')
                    ->boolean(),
                Tables\Columns\TextColumn::make('full_legal_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('current_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cell_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parents_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parents_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('school')
                    ->searchable(),
                Tables\Columns\IconColumn::make('ever_been_evicted')
                    ->boolean(),
                Tables\Columns\IconColumn::make('willfully_intentionally_refused_rent')
                    ->boolean(),
                Tables\Columns\IconColumn::make('caused_more_$150_property_damage')
                    ->boolean(),
                Tables\Columns\IconColumn::make('convicted_of_felony_misdemeanor')
                    ->boolean(),
                Tables\Columns\IconColumn::make('credit_problems_previous_2_years')
                    ->boolean(),
                Tables\Columns\IconColumn::make('under_18')
                    ->boolean(),
                Tables\Columns\IconColumn::make('military_enlistment')
                    ->boolean(),
                Tables\Columns\IconColumn::make('bringing_pets')
                    ->boolean(),
                Tables\Columns\TextColumn::make('driver_license_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('driver_license_state')
                    ->searchable(),
                Tables\Columns\IconColumn::make('owns_vehicle')
                    ->boolean(),
                Tables\Columns\TextColumn::make('vehicle_make')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vehicle_year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vehicle_license_plate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vehicle_license_state')
                    ->searchable(),
                Tables\Columns\IconColumn::make('has_bicycle')
                    ->boolean(),
                Tables\Columns\IconColumn::make('has_boat')
                    ->boolean(),
                Tables\Columns\IconColumn::make('has_motorcycle')
                    ->boolean(),
                Tables\Columns\IconColumn::make('has_camper')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_employed')
                    ->boolean(),
                Tables\Columns\TextColumn::make('current_employer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employer_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employer_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_monthly_salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('employer_supervisor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employer_length_of_employment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('provider_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('provider_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('provider_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_1_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_1_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_1_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_1_start_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previous_rental_1_end_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previous_rental_2_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_2_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_2_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_2_start_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previous_rental_2_end_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previous_rental_3_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_3_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_3_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_3_start_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previous_rental_3_end_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previous_rental_4_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_4_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_4_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_rental_4_start_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previous_rental_4_end_date')
                    ->dateTime()
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
            'index' => Pages\ListApplicants::route('/'),
            'create' => Pages\CreateApplicant::route('/create'),
            'edit' => Pages\EditApplicant::route('/{record}/edit'),
        ];
    }
}
