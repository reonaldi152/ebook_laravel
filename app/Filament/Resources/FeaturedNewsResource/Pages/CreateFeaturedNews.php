<?php

namespace App\Filament\Resources\FeaturedNewsResource\Pages;

use App\Filament\Resources\FeaturedNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeaturedNews extends CreateRecord
{
    protected static string $resource = FeaturedNewsResource::class;
}
