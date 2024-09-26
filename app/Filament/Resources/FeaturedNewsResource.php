<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\FeaturedNews;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FeaturedNewsResource\Pages;
use App\Filament\Resources\FeaturedNewsResource\RelationManagers;

class FeaturedNewsResource extends Resource
{
    protected static ?string $model = FeaturedNews::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Description')
                    ->required(),
                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->directory('featured-thumbnail')
                    ->required(),
                TextInput::make('category')
                    ->label('Category')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('published_at')
                    ->label('Published Date')
                    ->required(),
                TextInput::make('link')
                    ->label('Link')
                    ->url() // Validasi sebagai URL
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListFeaturedNews::route('/'),
            'create' => Pages\CreateFeaturedNews::route('/create'),
            'edit' => Pages\EditFeaturedNews::route('/{record}/edit'),
        ];
    }
}
