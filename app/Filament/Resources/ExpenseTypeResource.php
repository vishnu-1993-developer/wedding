<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpenseTypeResource\Pages;
use App\Filament\Resources\ExpenseTypeResource\RelationManagers;
use App\Models\ExpenseType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExpenseTypeResource extends Resource
{
    protected static ?string $model = ExpenseType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 7;

    protected static ?string $navigationGroup = "Expenses";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('expense_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('expense_type')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageExpenseTypes::route('/'),
        ];
    }
}
