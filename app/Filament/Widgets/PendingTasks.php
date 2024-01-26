<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\TodoTaskResource;

class PendingTasks extends BaseWidget
{
    protected static ?int $sort = 4;

    public function table(Table $table): Table
    {
        return $table
            ->query(TodoTaskResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort("due_date","desc")
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('assignedTo.name')
                    ->searchable(),
                TextColumn::make("assigned_date"),
                TextColumn::make("due_date"),
                TextColumn::make("status"),
                TextColumn::make("priority"),
            ]);
    }
}
