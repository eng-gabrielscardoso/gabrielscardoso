<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use App\Filament\Resources\VolunteeringResource\Pages\ListVolunteerings;
use App\Filament\Resources\VolunteeringResource\Pages\CreateVolunteering;
use App\Filament\Resources\VolunteeringResource\Pages\ViewVolunteering;
use App\Filament\Resources\VolunteeringResource\Pages\EditVolunteering;
use App\Enums\CauseType;
use App\Filament\Resources\VolunteeringResource\Pages;
use App\Models\Volunteering;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VolunteeringResource extends Resource
{
    protected static ?string $model = Volunteering::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-globe-europe-africa';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('role')
                    ->autofocus()
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                TextInput::make('organisation')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                Select::make('cause')
                    ->required()
                    ->options(CauseType::class),
                DatePicker::make('start_date')
                    ->required()
                    ->native(false)
                    ->displayFormat('m/Y'),
                DatePicker::make('end_date')
                    ->native(false)
                    ->displayFormat('m/Y'),
                RichEditor::make('description')
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
                TextColumn::make('role')
                    ->searchable(),
                TextColumn::make('organisation')
                    ->searchable(),
                TextColumn::make('cause')
                    ->searchable(),
                TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
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
            'index' => ListVolunteerings::route('/'),
            'create' => CreateVolunteering::route('/create'),
            'view' => ViewVolunteering::route('/{record}'),
            'edit' => EditVolunteering::route('/{record}/edit'),
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
