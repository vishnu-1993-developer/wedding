<?php

namespace App\Filament\Resources\TodoTaskResource\Pages;

use App\Filament\Resources\TodoTaskResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTodoTasks extends ListRecords
{
    protected static string $resource = TodoTaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
