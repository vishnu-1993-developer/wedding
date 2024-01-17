<?php

namespace App\Filament\Resources\ApparelTypeResource\Pages;

use App\Filament\Resources\ApparelTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApparelTypes extends ListRecords
{
    protected static string $resource = ApparelTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
