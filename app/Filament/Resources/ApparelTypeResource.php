<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApparelTypeResource\Pages;
use App\Filament\Resources\ApparelTypeResource\RelationManagers;
use App\Models\ApparelType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;

class ApparelTypeResource extends Resource
{
    protected static ?string $model = ApparelType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Apparels";
    
    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('min_budget')
                    ->required(),
                TextInput::make('max_budget')
                    ->required(),
                Select::make('age_group')
                ->options(config("enums.ageGroups"))
                ->required(),
                Select::make("gender")
                ->options([
                    "male"      =>  "Male",
                    "female"    =>  "Female",
                ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('min_budget')
                    ->searchable(),
                TextColumn::make("max_budget"),
                TextColumn::make("age_group")
                ->formatStateUsing(fn(String $state): string => config("enums.ageGroups")[$state]),
                TextColumn::make("gender")
                ->formatStateUsing(fn(string $state): string => config("enums.gender")[$state]),
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
            'index' => Pages\ListApparelTypes::route('/'),
            'create' => Pages\CreateApparelType::route('/create'),
            'edit' => Pages\EditApparelType::route('/{record}/edit'),
        ];
    }
}
