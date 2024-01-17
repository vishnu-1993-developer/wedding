<?php

namespace App\Filament\Resources\ApparelTypeResource\Pages;

use App\Filament\Resources\ApparelTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateApparelType extends CreateRecord
{
    protected static string $resource = ApparelTypeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
}
