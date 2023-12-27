<?php

namespace App\Filament\Resources\ShaadiExpenseResource\Pages;

use App\Filament\Resources\ShaadiExpenseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShaadiExpense extends EditRecord
{
    protected static string $resource = ShaadiExpenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
