<?php

namespace App\Filament\Resources\TodoTaskResource\Pages;

use App\Filament\Resources\TodoTaskResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTodoTask extends CreateRecord
{
    protected static string $resource = TodoTaskResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
