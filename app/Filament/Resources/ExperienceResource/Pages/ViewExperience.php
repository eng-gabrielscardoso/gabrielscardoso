<?php

namespace App\Filament\Resources\ExperienceResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\ExperienceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewExperience extends ViewRecord
{
    protected static string $resource = ExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
