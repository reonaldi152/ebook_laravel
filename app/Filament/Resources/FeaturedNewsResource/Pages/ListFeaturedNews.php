<?php

namespace App\Filament\Resources\FeaturedNewsResource\Pages;

use App\Filament\Resources\FeaturedNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedNews extends ListRecords
{
    protected static string $resource = FeaturedNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
