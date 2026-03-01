<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationLabel = 'Experience & Clubs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('role')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g. Founder & President'),

                TextInput::make('organization')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g. WPS Coding & Robotics Club'),

                DatePicker::make('start_date')
                    ->required(),

                DatePicker::make('end_date')
                    ->label('End Date (Leave blank if currently active)'),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->helperText('Describe your responsibilities and achievements.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('role')->searchable(),
                TextColumn::make('organization')->searchable(),
                TextColumn::make('start_date')->date()->sortable(),
                TextColumn::make('end_date')->date()->sortable()->placeholder('Present'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
