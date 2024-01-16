<?php

namespace App\Filament\Resources\TodoTaskResource\Pages;

use App\Filament\Resources\TodoTaskResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTodoTask extends EditRecord
{
    protected static string $resource = TodoTaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
