<?php

namespace App\Filament\Resources\ApparelDetailsResource\Pages;

use App\Filament\Resources\ApparelDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateApparelDetails extends CreateRecord
{
    protected static string $resource = ApparelDetailsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
}
