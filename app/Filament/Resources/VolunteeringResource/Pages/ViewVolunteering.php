<?php

namespace App\Filament\Resources\VolunteeringResource\Pages;

use App\Filament\Resources\VolunteeringResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVolunteering extends ViewRecord
{
    protected static string $resource = VolunteeringResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
