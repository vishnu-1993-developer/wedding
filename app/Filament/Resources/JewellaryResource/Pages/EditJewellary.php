<?php

namespace App\Filament\Resources\JewellaryResource\Pages;

use App\Filament\Resources\JewellaryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJewellary extends EditRecord
{
    protected static string $resource = JewellaryResource::class;

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
