<?php

namespace App\Filament\Resources\ShaadiExpenseResource\Pages;

use App\Filament\Resources\ShaadiExpenseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShaadiExpenses extends ListRecords
{
    protected static string $resource = ShaadiExpenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ShaadiExpenseResource\Widgets\ExpenseOverview::class,
        ];
    }
}
