<?php

namespace App\Filament\Resources\ApparelTypeResource\Pages;

use App\Filament\Resources\ApparelTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApparelType extends EditRecord
{
    protected static string $resource = ApparelTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl("index");
    }
}
