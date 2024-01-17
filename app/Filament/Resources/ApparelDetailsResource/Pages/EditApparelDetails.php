<?php

namespace App\Filament\Resources\ApparelDetailsResource\Pages;

use App\Filament\Resources\ApparelDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApparelDetails extends EditRecord
{
    protected static string $resource = ApparelDetailsResource::class;

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
