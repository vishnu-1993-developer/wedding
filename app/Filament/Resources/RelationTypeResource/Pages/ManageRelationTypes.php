<?php

namespace App\Filament\Resources\RelationTypeResource\Pages;

use App\Filament\Resources\RelationTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRelationTypes extends ManageRecords
{
    protected static string $resource = RelationTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
