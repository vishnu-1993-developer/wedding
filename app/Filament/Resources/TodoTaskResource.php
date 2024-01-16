<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TodoTaskResource\Pages;
use App\Filament\Resources\TodoTaskResource\RelationManagers;
use App\Models\TodoTask;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;

class TodoTaskResource extends Resource
{
    protected static ?string $model = TodoTask::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 7;

    protected static ?string $navigationGroup = "Expenses";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Select::make('assigned_to')
                ->relationship("assignedTo","name")
                    ->required(),
                DateTimePicker::make("assigned_date")
                ->required(),
                DateTimePicker::make("due_date"),
                Select::make('status')
                ->options([
                    "ready"         =>  "Ready",
                    "in_progress"   =>  "In Progress",
                    "pending"       =>  "Pending",
                    "overdue"       =>  "Overdue",
                    "completed"     =>  "Completed",
                    "cancelled"     =>  "Cancelled"
                ])
                ->required(),
                Select::make("priority")
                ->options([
                    "high"      =>  "High",
                    "medium"    =>  "Medium",
                    "low"       =>  "Low",
                ])
                ->required(),
                RichEditor::make('description')
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('assignedTo.name')
                    ->searchable(),
                TextColumn::make("assigned_date"),
                TextColumn::make("due_date"),
                TextColumn::make("status"),
                TextColumn::make("priority"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTodoTasks::route('/'),
            'create' => Pages\CreateTodoTask::route('/create'),
            'edit' => Pages\EditTodoTask::route('/{record}/edit'),
        ];
    }
}
