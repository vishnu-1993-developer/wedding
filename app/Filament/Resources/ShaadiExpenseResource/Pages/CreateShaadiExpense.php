<?php

namespace App\Filament\Resources\ShaadiExpenseResource\Pages;

use App\Filament\Resources\ShaadiExpenseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateShaadiExpense extends CreateRecord
{
    protected static string $resource = ShaadiExpenseResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
