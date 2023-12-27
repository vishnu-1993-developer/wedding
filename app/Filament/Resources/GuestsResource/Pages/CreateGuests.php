<?php

namespace App\Filament\Resources\GuestsResource\Pages;

use App\Filament\Resources\GuestsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGuests extends CreateRecord
{
    protected static string $resource = GuestsResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
