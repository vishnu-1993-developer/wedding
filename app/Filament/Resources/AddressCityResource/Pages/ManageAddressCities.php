<?php

namespace App\Filament\Resources\AddressCityResource\Pages;

use App\Filament\Resources\AddressCityResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAddressCities extends ManageRecords
{
    protected static string $resource = AddressCityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
