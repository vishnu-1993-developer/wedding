<?php

namespace App\Filament\Resources\ApparelDetailsResource\Pages;

use App\Filament\Resources\ApparelDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApparelDetails extends ListRecords
{
    protected static string $resource = ApparelDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
