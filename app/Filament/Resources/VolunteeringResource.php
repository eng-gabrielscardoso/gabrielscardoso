<?php

namespace App\Filament\Resources;

use App\Enums\CauseType;
use App\Filament\Resources\VolunteeringResource\Pages;
use App\Models\Volunteering;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VolunteeringResource extends Resource
{
    protected static ?string $model = Volunteering::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-europe-africa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('role')
                    ->autofocus()
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                Forms\Components\TextInput::make('organisation')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                Forms\Components\Select::make('cause')
                    ->required()
                    ->options(CauseType::class),
                Forms\Components\DatePicker::make('start_date')
                    ->required()
                    ->native(false)
                    ->displayFormat('m/Y'),
                Forms\Components\DatePicker::make('end_date')
                    ->native(false)
                    ->displayFormat('m/Y'),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->minLength(3)
                    ->maxLength(1024 * 5)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('role')
                    ->searchable(),
                Tables\Columns\TextColumn::make('organisation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cause')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListVolunteerings::route('/'),
            'create' => Pages\CreateVolunteering::route('/create'),
            'view' => Pages\ViewVolunteering::route('/{record}'),
            'edit' => Pages\EditVolunteering::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
