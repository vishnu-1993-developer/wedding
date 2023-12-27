<?php

namespace App\Filament\Resources\JewellaryResource\Pages;

use App\Filament\Resources\JewellaryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJewellaries extends ListRecords
{
    protected static string $resource = JewellaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
