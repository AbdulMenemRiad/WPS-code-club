<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificateResource\Pages;
use App\Models\Certificate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// Component Imports for the Form
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

// Component Imports for the Table
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class CertificateResource extends Resource
{
    protected static ?string $model = Certificate::class;

    // Academic cap icon for the sidebar
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., IELTS Band 8.5, Coursera Electronics'),

                TextInput::make('issuer')
                    ->maxLength(255)
                    ->placeholder('e.g., British Council, Coursera'),

                DatePicker::make('date_earned')
                    ->label('Date Earned'),

                // Handles the file upload and saves to the public storage disk
                FileUpload::make('file_path')
                    ->required()
                    ->directory('certificates')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'application/pdf'])
                    ->label('Certificate File (Image or PDF)')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('file_path')
                    ->label('Preview'),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('issuer')
                    ->searchable(),

                TextColumn::make('date_earned')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListCertificates::route('/'),
            'create' => Pages\CreateCertificate::route('/create'),
            'edit' => Pages\EditCertificate::route('/{record}/edit'),
        ];
    }
}
