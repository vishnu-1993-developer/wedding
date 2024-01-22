<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuestsResource\Pages;
use App\Filament\Resources\GuestsResource\RelationManagers;
use App\Models\Guests;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;

class GuestsResource extends Resource
{
    protected static ?string $model = Guests::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = "Guests";

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Forms\Components\Select::make('address_city_id')
                    ->required()
                    ->relationship('addressCity','city_name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('city_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Toggle::make('active')
                            ->required(),
                    ]),
                Forms\Components\Select::make('caste_id')
                    ->required()
                    ->relationship('caste','name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Toggle::make('active')
                            ->required(),
                    ]),
                Forms\Components\Select::make('reference_id')
                    ->required()
                    ->relationship('reference','name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Toggle::make('active')
                            ->required(),
                    ]),
                Forms\Components\Select::make('relation_type_id')
                    ->required()
                    ->relationship('relationType','relation_type')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('relation_type')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Toggle::make('active')
                            ->required(),
                    ]),
                Forms\Components\Radio::make('include_in_barati')
                ->label("Include In Barati")
                ->boolean()
                ->inline(),
                Forms\Components\Radio::make('card_delivered')
                ->label("Card Delievered")
                ->boolean()
                ->inline(),
                Forms\Components\TextInput::make('number_of_people')
                ->label("Number of people")
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
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('addressCity.city_name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('caste.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reference.name')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('include_in_barati')->label("Barati"),
                Tables\Columns\ToggleColumn::make('card_delivered')->label("Card Delivered"),
                Tables\Columns\TextColumn::make('number_of_people')->label("Peoples"),
                Tables\Columns\TextColumn::make('relationType.relation_type')->label("Relation"),
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
                Filter::make('include_in_barati')
                ->query(fn (Builder $query): Builder => $query->where('include_in_barati', true)),
                Filter::make('card_delivered')
                ->query(fn (Builder $query): Builder => $query->where('card_delivered', true)),
                SelectFilter::make('caste_id')->label("Select By Caste")->relationship('caste','name'),
                SelectFilter::make('reference_id')->label("Select By Reference")->relationship('reference','name'),
                SelectFilter::make('address_city_id')->label("Select By City")->relationship('addressCity','city_name'),
                SelectFilter::make('relation_type_id')->label("Select By Relation")->relationship('relationType','relation_type'),
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
            'index' => Pages\ListGuests::route('/'),
            'create' => Pages\CreateGuests::route('/create'),
            'edit' => Pages\EditGuests::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            GuestsResource\Widgets\CardDeliveredStatus::class,
        ];
    }
}
