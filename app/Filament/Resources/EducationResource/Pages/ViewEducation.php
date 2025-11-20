<?php

namespace App\Filament\Resources\EducationResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\EducationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEducation extends ViewRecord
{
    protected static string $resource = EducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
