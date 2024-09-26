<?php

namespace App\Filament\Resources\FeaturedNewsResource\Pages;

use App\Filament\Resources\FeaturedNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedNews extends EditRecord
{
    protected static string $resource = FeaturedNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
