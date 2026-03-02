<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;

// Component Imports for the Form
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

// Component Imports for the Table
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    // Changes the icon in the left sidebar
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->helperText('Used for the URL, e.g., "my-robot-arm"'),

                TextInput::make('category')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Client Website, Backend, Mechatronics'),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->helperText('Explain the problem you solved and the tech stack you used.'),


                RichEditor::make('content')
                    ->label('Full Project Details')
                    ->columnSpanFull()
                    ->fileAttachmentsDirectory('project-inline-images') // This lets you drag & drop photos right into the text!
                    ->helperText('Write your full case study here. You can drag and drop images directly into the text.'),

                // Automatically handles file uploading and saving the path to SQLite
                FileUpload::make('image_path')
                    ->image()
                    ->directory('project-images')
                    ->label('Project Screenshot or Photo'),

                FileUpload::make('video_path')
                    ->directory('project-videos')
                    ->acceptedFileTypes(['video/mp4', 'image/gif'])
                    ->label('Demo Video or GIF (Optional)'),

                TextInput::make('live_url')
                    ->url()
                    ->maxLength(255)
                    ->label('Live Site URL'),

                TextInput::make('demo_url')
                    ->url()
                    ->maxLength(255)
                    ->label('Self-Hosted Demo URL'),

                TextInput::make('github_url')
                    ->url()
                    ->maxLength(255)
                    ->label('GitHub URL'),

                Toggle::make('is_featured')
                    ->label('Pin to Homepage?'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')
                    ->label('Preview'),

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('category')
                    ->sortable()
                    ->searchable(),

                IconColumn::make('is_featured')
                    ->boolean()
                    ->label('Featured'),

                TextColumn::make('created_at')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
