<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApparelDetailsResource\Pages;
use App\Filament\Resources\ApparelDetailsResource\RelationManagers;
use App\Models\ApparelDetails;
use App\Models\ApparelType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\select;
use Filament\Tables\Filters\SelectFilter;

class ApparelDetailsResource extends Resource
{
    protected static ?string $model = ApparelDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Expenses";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('apparel_types_id')
                    ->required()
                    ->relationship("apparelTypes","name")
                    ->getOptionLabelFromRecordUsing(fn (ApparelType $apparelType) =>  "{$apparelType->nameWithDetails()}")
                    ->createOptionForm([
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
                    ]),
                Forms\Components\TextInput::make('person_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('relation')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gurdian')
                    ->maxLength(255),
                Forms\Components\TextInput::make('quantity')
                    ->numeric()
                    ->required(),    
                Forms\Components\Toggle::make('purchased')
                    ->required(),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('apparelTypes.name')
                    ->description(fn (ApparelDetails $apparelDetails): string =>  $apparelDetails->apparelTypes->nameWithDetails()),
                Tables\Columns\TextColumn::make('person_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('relation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gurdian')
                    ->searchable(),
                Tables\Columns\IconColumn::make('purchased')
                    ->boolean(),
                Tables\Columns\TextColumn::make('description')
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
                SelectFilter::make("apparel_types_id")->label("Select By Range")->relationship("apparelTypes",'name')
                ->getOptionLabelFromRecordUsing(fn (ApparelType $apparelType) =>  "{$apparelType->nameWithDetails()}"),
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
            'index' => Pages\ListApparelDetails::route('/'),
            'create' => Pages\CreateApparelDetails::route('/create'),
            'edit' => Pages\EditApparelDetails::route('/{record}/edit'),
        ];
    }
}
