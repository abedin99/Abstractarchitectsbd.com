<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-s-light-bulb';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([ 
                Grid::make(2)
                    ->schema([
                        Section::make()
                            ->columns([
                                'sm' => 3,
                                'xl' => 6,
                                '2xl' => 8,
                            ])
                            ->schema([
                                TextInput::make('name')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 3,
                                        '2xl' => 4,
                                    ]),
                                // ...
                            ]),
                                
                        Section::make()
                            ->columns([
                                'sm' => 3,
                                'xl' => 6,
                                '2xl' => 8,
                            ])
                            ->schema([
                                TextInput::make('name')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 3,
                                        '2xl' => 4,
                                    ]),
                                // ...
                            ])
                    ]),
                //     Select::make('service_id')
                //         ->relationship('service', 'title')
                //         ->required(),

                //     TextInput::make('title')
                //         ->columnSpan('full')
                //         ->required()
                //         ->maxLength(255),

                //     RichEditor::make('content')
                //         ->columnSpan('full')
                //         ->nullable()
                //         ->maxLength(5000),
                        
                //         TextInput::make('date')
                //             ->columnSpan('full')
                //             ->required()
                //             ->maxLength(255),

                //         TextInput::make('location')
                //             ->columnSpan('full')
                //             ->required()
                //             ->maxLength(255),

                //         TextInput::make('value')
                //             ->columnSpan('full')
                //             ->required()
                //             ->maxLength(255),

                //         TextInput::make('client')
                //             ->columnSpan('full')
                //             ->required()
                //             ->maxLength(255),
                // Toggle::make('status')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\ToggleColumn::make('status'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),

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
