<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
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
use App\Filament\Resources\EducationResource\Pages\ListEducation;
use App\Filament\Resources\EducationResource\Pages\CreateEducation;
use App\Filament\Resources\EducationResource\Pages\ViewEducation;
use App\Filament\Resources\EducationResource\Pages\EditEducation;
use App\Filament\Resources\EducationResource\Pages;
use App\Models\Education;
use App\Support\UsesMonthYearDates;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationResource extends Resource
{
    use UsesMonthYearDates;

    protected static ?string $model = Education::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('degree')
                    ->autofocus()
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                TextInput::make('course')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                TextInput::make('field_of_study')
                    ->minLength(3)
                    ->maxLength(255),
                TextInput::make('school')
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
                // Tables\Columns\TextColumn::make('degree')
                //     ->searchable(),
                TextColumn::make('course')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('field_of_study')
                //     ->searchable(),
                TextColumn::make('school')
                    ->searchable(),
                TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => ListEducation::route('/'),
            'create' => CreateEducation::route('/create'),
            'view' => ViewEducation::route('/{record}'),
            'edit' => EditEducation::route('/{record}/edit'),
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
