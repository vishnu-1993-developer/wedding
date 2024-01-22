<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShaadiExpenseResource\Pages;
use App\Filament\Resources\ShaadiExpenseResource\RelationManagers;
use App\Models\ShaadiExpense;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShaadiExpenseResource extends Resource
{
    protected static ?string $model = ShaadiExpense::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-rupee';

    protected static ?int $navigationSort = 6;

    protected static ?string $navigationGroup = "Expenses";

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::sum('advance');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('advance')
                    ->numeric(),
                Forms\Components\TextInput::make('dues')
                    ->numeric(),
                Forms\Components\TextInput::make('paid_person')
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_no')
                    ->maxLength(255),
                Forms\Components\Toggle::make('fully_paid')
                    ->required(),
                Forms\Components\Select::make("expense_type_id")
                ->relationship('expenseTypes','expense_type')
                ->required()
                ->createOptionForm([
                    Forms\Components\TextInput::make('expense_type')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Toggle::make('active')
                        ->required(),
                ]),
                Forms\Components\Textarea::make('comment')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('advance')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dues')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('paid_person')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_no')
                    ->searchable(),
                Tables\Columns\IconColumn::make('fully_paid')
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
            'index' => Pages\ListShaadiExpenses::route('/'),
            'create' => Pages\CreateShaadiExpense::route('/create'),
            'edit' => Pages\EditShaadiExpense::route('/{record}/edit'),
        ];
    }
}
