<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ebooks;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EbookResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EbookResource\RelationManagers;

class EbookResource extends Resource
{
    protected static ?string $model = Ebooks::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->label('Judul'),
                TextInput::make('author')
                    ->required()
                    ->label('Penulis'),
                FileUpload::make('cover_image')
                    ->label('Cover Image')
                    ->disk('public')
                    ->directory('image-eboks')
                    ->required(),
                FileUpload::make('pdf_file')
                    ->label('PDF File') // Label yang ditampilkan pada form
                    ->directory('pdfs') // Direktori penyimpanan file di dalam `storage/app/public/pdf/`
                    ->visibility('public') // Pastikan file diakses secara publik (opsional)
                    ->acceptedFileTypes(['application/pdf']) // Membatasi hanya menerima file PDF
                    ->maxSize(1024)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul'),
                TextColumn::make('author')
                    ->label('Penulis'),
                ImageColumn::make('cover_image')
                    ->label('Cover Image'),
                TextColumn::make('pdf_file')
                    ->label('PDF File')
                    ->url(function ($record) {
                        return Storage::url($record->pdf_file); // Menampilkan URL ke file PDF
                    })
                    ->openUrlInNewTab() // Membuka PDF di tab baru jika diklik
                    ->description('Klik untuk melihat PDF'), // Deskripsi tambahan
                IconColumn::make('pdf_file')
                    ->label('PDF Uploaded?')
                    ->boolean() // Menggunakan ikon centang/silang untuk menunjukkan status file PDF
                    ->trueIcon('heroicon-o-check-circle') // Ikon centang
                    ->falseIcon('heroicon-o-x-circle') // Ikon silang
                    ->tooltip(function ($record) {
                        return $record->pdf_file ? 'PDF diunggah' : 'PDF tidak diunggah';
                    }),
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
            'index' => Pages\ListEbooks::route('/'),
            'create' => Pages\CreateEbook::route('/create'),
            'edit' => Pages\EditEbook::route('/{record}/edit'),
        ];
    }
}
