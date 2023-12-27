<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JewellaryResource\Pages;
use App\Filament\Resources\JewellaryResource\RelationManagers;
use App\Models\Jewellary;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JewellaryResource extends Resource
{
    protected static ?string $model = Jewellary::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 8;

    protected static ?string $navigationGroup = "Jewellary";

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::sum("estimated_price");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('estimated_price')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('final_price')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('purchased')
                    ->required(),
                Forms\Components\TextInput::make('store_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('receipt')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estimated_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('final_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('purchased')
                    ->boolean(),
                Tables\Columns\TextColumn::make('store_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('receipt')
                    ->searchable(),
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
            'index' => Pages\ListJewellaries::route('/'),
            'create' => Pages\CreateJewellary::route('/create'),
            'edit' => Pages\EditJewellary::route('/{record}/edit'),
        ];
    }
}
