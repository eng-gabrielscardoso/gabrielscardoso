<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use App\Filament\Resources\ExperienceResource\Pages\ListExperiences;
use App\Filament\Resources\ExperienceResource\Pages\CreateExperience;
use App\Filament\Resources\ExperienceResource\Pages\ViewExperience;
use App\Filament\Resources\ExperienceResource\Pages\EditExperience;
use App\Enums\EmploymentType;
use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use App\Support\UsesMonthYearDates;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    use UsesMonthYearDates;

    protected static ?string $model = Experience::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->autofocus()
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                TextInput::make('company')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                Select::make('employment_type')
                    ->required()
                    ->options(EmploymentType::class),
                TextInput::make('location')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                RichEditor::make('description')
                    ->required()
                    ->minLength(3)
                    ->maxLength(1024 * 5)
                    ->columnSpanFull(),
                DatePicker::make('start_date')
                    ->required()
                    ->native(false)
                    ->displayFormat('m/Y'),
                DatePicker::make('end_date')
                    ->native(false)
                    ->displayFormat('m/Y'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('company')
                    ->searchable(),
                TextColumn::make('employment_type')
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
            'index' => ListExperiences::route('/'),
            'create' => CreateExperience::route('/create'),
            'view' => ViewExperience::route('/{record}'),
            'edit' => EditExperience::route('/{record}/edit'),
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
